<!-- resources/views/categories/show.blade.php -->
@extends('layout')

@section('title', $category->name)

@section('content')
    <div class="container mt-5">
        <h1>{{ $category->name }}</h1>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary mt-3">Back to Categories List</a>
    </div>
@endsection

