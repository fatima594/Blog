<!-- coffee section start -->
@extends('master')

@section('content')
<div class="coffee_section layout_padding">
    <div class="container">
        <div class="row">
            <h1 class="coffee_taital">Feature blogs</h1>
            <div class="bulit_icon"><img src="images/bulit-icon.png" alt="Bullet Icon"></div>
        </div>
    </div>
    <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @forelse($blogs->chunk(4) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach($chunk as $blog)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="coffee_img">
                                            <img src="{{ $blog->image ? Storage::url($blog->image) : 'images/default.png' }}" alt="{{ $blog->title }}">
                                        </div>
                                        <h3 class="types_text">{{ $blog->title }}</h3>
                                        <p class="looking_text">{{ Str::limit($blog->description, 50) }}</p>
                                        <div class="read_bt">
                                            <a style="background: #ffd54f" href="{{ route('single', $blog->id) }}">Read More</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No blogs available.</p>
                @endforelse
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- topic section end -->


{{--about start--}}


    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="about_taital">About Blog</h1>
                    <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
                </div>
            </div>
            <div class="about_section_2 layout_padding">
                <div class="image_iman"><img src="{{'images/health2.jpg'}}" class="about_img"></div>

                    <h1 class="about_taital_1">My Blog</h1>
                    <p class=" about_text">Welcome At our website blog, we are committed to providing reliable and comprehensive information on health,
                        sports, and herbs. We are here to help you improve your quality of life by offering science-based advice and practical tips that can be applied to your daily life.

                        Our mission is to empower individuals to achieve a balanced,
                        healthy life by providing accurate and thorough information in the areas
                        of physical and mental health, fitness, and the use of natural herbs.
                        We believe that correct information plays a crucial role in making informed health decisions.

                    </p>

                </div>
            </div>
        </div>
    </div>



{{--about end --}}


{{--contact start --}}

<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch</h1>
                    <div class="bulit_icon"><img src="images/bulit-icon.png" alt="Icon"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Your Name" name="name" value="{{ old('name') }}">
                            <input type="text" class="mail_text" placeholder="Your Email" name="email" value="{{ old('email') }}">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="phone" value="{{ old('phone') }}">
                            <textarea name="message" class="massage-bt" placeholder="Message" rows="5" id="comment">{{ old('message') }}</textarea>
                            <button type="submit" class="send_bt">SEND</button>
                        </div>
                    </div>
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



@endsection
