@extends('layout')

@section('title', $blog->title)

@section('content')
    <div class="container mt-5">
        <h1>{{ $blog->title }}</h1>

        <!-- Display Image -->
        @if ($blog->image)
            <img src="{{ asset('storage/blogs/' .basename($blog->image)) }}" alt="{{ $blog->title }}" width="100">
        @else
            <span>No Image</span>
        @endif

        <!-- Display Slug -->
        <div class="mt-3">
            <strong>Slug:</strong> {{ $blog->slug }}
        </div>

        <!-- Display Category -->
        <div class="mt-3">
            <strong>Category:</strong> {{ $blog->category->name ?? 'No Category' }}
        </div>

        <!-- Display Description -->
        <div class="mt-3">
            <strong>Description:</strong>
            <p>{!! nl2br(e($blog->description)) !!}</p>
        </div>

        <div class="mt-3">
            <strong>Description2:</strong>
            <p>{!! nl2br(e($blog->description2)) !!}</p>
        </div>
        <div class="mt-3">
            <strong>Description3:</strong>
            <p>{!! nl2br(e($blog->description3)) !!}</p>
        </div>
        <div class="mt-3">
            <strong>Description4:</strong>
            <p>{!! nl2br(e($blog->description4)) !!}</p>
        </div>
        <div class="mt-3">
            <strong>Description5:</strong>
            <p>{!! nl2br(e($blog->description5)) !!}</p>
        </div>
        <div class="mt-3">
            <strong>Description6:</strong>
            <p>{!! nl2br(e($blog->description6)) !!}</p>
        </div>

        <!-- Back to List Button -->
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary mt-3">Back to Blog List</a>
    </div>
@endsection
