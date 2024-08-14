
@extends('master')

@section('content')

<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">About My Blog</h1>
                <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
        </div>
        <div class="about_section_2 layout_padding">
            <div class="image_iman"><img src="{{'images/health2.jpg'}}" class="about_img"></div>
            <div class="about_taital_box">
                <h1 class="about_taital_1">My blog '</h1>
                <p class=" about_text">Welcome At our website blog, we are committed to providing reliable and comprehensive information on health,
                    sports, and herbs. We are here to help you improve your quality of life by offering science-based advice and practical tips that can be applied to your daily life.

                    Our mission is to empower individuals to achieve a balanced,
                    healthy life by providing accurate and thorough information in the areas
                    of physical and mental health, fitness, and the use of natural herbs.
                    We believe that correct information plays a crucial role in making informed health decisions.
                </p>
                <div class="readmore_btn"><a href="#">Read More</a></div>
            </div>
        </div>
    </div>
</div>


@endsection
