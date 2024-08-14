<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        App::setLocale('en');
        $blogs = Blog::with('category')->get(); // Load the category relation
        return view('layouts.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all(); // Load all categories
        return view('layouts.blog.create', compact('categories'));
    }

    public function store(StoreBlogRequest $request)
    {
        $validatedData = $request->validated(); // Get the validated data from the request

        // Handle image upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('public/blogs');
        }

        // Create the blog post
        Blog::create($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }

    public function show($id)
    {
        $blog = Blog::with(['category', 'comments'])->findOrFail($id); // Load the category and comments relation

        return view('layouts.blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all(); // Load all categories for selection
        return view('layouts.blog.edit', compact('blog', 'categories'));
    }

    public function update(StoreBlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validatedData = $request->validated(); // Get the validated data from the request

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $validatedData['image'] = $request->file('image')->store('public/blogs');
        }

        // Update the blog post
        $blog->update($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image if it exists
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        // Delete the blog post
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }
}
