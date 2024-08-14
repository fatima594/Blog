@extends('master')

@section('content')

    <form action="{{ route('send.contact') }}" method="POST">
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
