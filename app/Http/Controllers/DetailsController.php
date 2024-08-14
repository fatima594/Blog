<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function indexByCategory($categoryId)
    {
        // Fetch the specified category by ID
        $category = Category::findOrFail($categoryId);

        // Fetch the posts associated with the category
        // $blogs = Blog::where('category_id', $categoryId)->get(); // 10 posts per page
        $blogs = Blog::where('category_id', $categoryId)->paginate(10);

        // Pass the category and blogs to the view
        return view('layouts.blogpage', compact('category', 'blogs'));
    }

    /**
     * Display a specific blog and its category.
     */
    public function show($id)
    {
        // Fetch the blog by ID
        $blog = Blog::findOrFail($id);

        // Fetch related blogs based on the blog's category
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('id', '!=', $id) // Exclude the current blog
            ->limit(3) // Limit the number of related blogs
            ->get();

        // Fetch all categories
        $categories = Category::all();

        // Display the blog, related blogs, and categories in the view
        return view('layouts.single', compact('blog', 'relatedBlogs', 'categories'));
    }
}
