@extends('master')

@section('content')

    <!-- Blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <!-- Section title and bullet icon -->
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <h1 class="about_taital">Our Blog</h1>
                    <div class="bulit_icon"><img src="{{'images/bulit-icon.png'}}" alt="Icon"></div>
                </div>
            </div>

            <!-- Blog list -->
            <div class="blog_section_2">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-4 mb-4">
                            <div class="blog_box border rounded p-3">
                                <div class="blog_img mb-3">
                                    <!-- Improve image display -->
                                    <img src="{{ asset('storage/blogs/' . basename($blog->image)) }}" alt="{{ $blog->title }}" class="img-fluid" style="width: 100%; height: auto; object-fit: cover; border-radius: 8px;">
                                </div>

                                <h4 class="prep_text">{{ $blog->title }}</h4>

                                <div class="read_bt mt-3">
                                    <a style="background:  lightsalmon; color: whitesmoke" href="{{ route('single', $blog->id) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination links -->
                <div class="mt-4">
                    {{--                {{ $blogs->links() }}--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Blog section end -->

@endsection
