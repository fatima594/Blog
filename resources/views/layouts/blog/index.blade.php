@extends('layout')

@section('title', 'Blog Posts')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Blog Posts</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create New Blog Post Button -->
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Create New Blog Post</a>

        <!-- Blog Posts Table -->
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Description</th>
                <th>Description2</th>
                <th>Description3</th>
                <th>Description4</th>
                <th>Description5</th>
                <th>Description6</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->slug }}</td>
                    <td>{{ $blog->category->name ?? 'No Category' }}</td>
                    <td>{{ Str::limit($blog->description, 50) }}</td>
                    <td>{{ Str::limit($blog->description2, 50) }}</td>
                    <td>{{ Str::limit($blog->description3, 50) }}</td>
                    <td>{{ Str::limit($blog->description4, 50) }}</td>
                    <td>{{ Str::limit($blog->description5, 50) }}</td>
                    <td>{{ Str::limit($blog->description6, 50) }}</td>
                    <td>
                        @if ($blog->image)
                            <img src="{{ asset('storage/blogs/' . basename($blog->image)) }}" alt="{{ $blog->title }}" width="50">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No blog posts available</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
