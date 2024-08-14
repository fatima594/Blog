<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>Fatima-blog</title>
    <!-- Font icons -->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + JoeBLog main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/joeblog.css') }}">

    <style>
        /* Custom styles for better presentation */
        body {
            font-family: 'Arial', sans-serif; /* Arial font for better readability */
            color: black; /* Default text color */
            font-weight: 400; /* Normal font weight */
            font-size: 18px; /* Increase font size */
            line-height: 6.8; /* Increase line height for better readability */
            margin: 8px; /* Remove default margins for better control */
            padding: 50px; /* Add padding around the text */
        }

        .navbar {
            font-weight: 600; /* Make navbar text semi-bold */
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Page Second Navigation -->
<nav class="navbar custom-navbar navbar-expand-md navbar-light" style="background-color: orange; color: black; border-color: orange;">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- Navigation items can go here -->
            </ul>
            <div class="navbar-nav ml-auto">
                <!-- Additional navigation items can go here -->
            </div>
        </div>
    </div>
</nav>
<!-- End Of Page Second Navigation -->

<!-- Page Header -->
<header style="background: #ffe8a1" class="page-header page-header-mini">
    <h1 class="title">{{ $blog->title }}</h1>
    <ol class="breadcrumb pb-0">
        <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
    </ol>
</header>
<!-- End Of Page Header -->

<section class="container">
    <div class="page-container">
        <div class="page-content">
            <div class="card">
                <div class="card-header pt-0">
                    <h3 class="card-title mb-4">{{ $blog->title }}</h3>
                    <div class="blog-media mb-4">
                        <img style="max-width: 1000px !important;" src="{{ asset('storage/blogs/' . basename($blog->image)) }}" alt="" class="w-100">
                        <a href="#" class="badge badge-primary">#{{ $blog->category->name }}</a>
                    </div>
                    <small class="small text-muted">
                        <a href="#" class="text-muted">BY Fatima</a>
                        <span class="px-2">·</span>
                        <span>{{ $blog->created_at->format('F d, Y') }}</span>
                        <span class="px-2">·</span>
                    </small>
                </div>
                <div class="card-body border-top">
                    <p style="color: darkblue" class="my-3">{{ $blog->description2 }}</p>
                    <p class="lorem_text">{{ $blog->description }}</p>

                    <hr>
                    <p class="my-3">{{ $blog->description3 }}</p>

                    <p class="my-3">{{ $blog->description4 }}</p>
                    <hr>
                    <p style="color: darkblue" class="my-3">{{ $blog->description5 }}</p>
                    <p class="my-3">{{ $blog->description6 }}</p>
                    <!-- Include more content if needed -->
                    <div><a style="color: black" href="{{url('/')}}">Come Back Home</a></div>
                </div>

                <!-- Comments form -->
                <form action="{{ route('send.email') }}" method="post">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}" required>
                    <div class="form-row">
                        <div class="col-12 form-group">
                            <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Enter Your Comment Here" required></textarea>
                        </div>
                        <div class="col-sm-4 form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <input type="url" name="website" class="form-control" placeholder="Website">
                        </div>
                    </div>
                    <button style="background: orange" type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- End of comments form -->

                <h6 class="mt-5 text-center">Related Posts</h6>
                <hr>
                <div class="row">
                    @foreach($relatedBlogs as $related)
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-5">
                                <div class="card-header p-0">
                                    <div class="blog-media">
                                        <img src="{{ asset('storage/blogs/' . basename($related->image)) }}" alt="" class="w-100">
                                        <a href="#" class="badge badge-primary">#{{ $related->category->name }}</a>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h6 class="card-title mb-2"><a href="{{ route('single', $related->id) }}" class="text-dark">{{ $related->title }}</a></h6>
                                    <small class="small text-muted">{{ $related->created_at->format('F d, Y') }}
                                        <span class="px-2">-</span>
                                        <a href="#" class="text-muted">{{ $related->comments_count }} Comments</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Page Footer -->
<footer class="page-footer">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                <!-- Footer logo can go here -->
            </div>
            <div class="col-md-9 text-center text-md-right">
                <div class="socials">
                    <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                    <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                    <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                    <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                    <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                </div>
            </div>
        </div>
        <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>document.write(new Date().getFullYear())</script>, blog Created By <a href="https://www.devcrud.com" class="text-muted font-weight-bold" target="_blank">Fatima.</a> All rights reserved</p>
    </div>
</footer>
<!-- End of Page Footer -->

<!-- Core JavaScript -->
<script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

<!-- JoeBLog JavaScript -->
<script src="{{ asset('assets/js/joeblog.js') }}"></script>

</body>
</html>

