<!-- resources/views/categories/edit.blade.php -->
@extends('layout')

@section('title', 'Edit Category')

@section('content')
    <div class="container mt-5">
        <h1>Edit Category</h1>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

