@extends('layout')

@section('title', 'Create Blog Post')

@section('content')
    <div class="container mt-5">
        <h1>Create Blog Post</h1>
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description2" class="form-label">Description2</label>
                <textarea id="description2" name="description2" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description3" class="form-label">Description3</label>
                <textarea id="description3" name="description3" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description4" class="form-label">Description4</label>
                <textarea id="description4" name="description4" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description5" class="form-label">Description5</label>
                <textarea id="description5" name="description5" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description6" class="form-label">Description6</label>
                <textarea id="description6" name="description6" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select id="category_id" name="category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
