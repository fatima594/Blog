<!-- resources/views/categories/create.blade.php -->
@extends('layout')

@section('title', 'Create Category')

@section('content')
    <div class="container mt-5">
        <h1>Create Category</h1>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

