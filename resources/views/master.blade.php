<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fatima Blog </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <style>

    </style>
</head>
<body>
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a style="width: 300px ; padding-bottom: 20px ; margin-left: 10px" class="navbar-brand"href="{{'/'}}"><img src="images/logo2.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="padding-bottom: 70px ; margin-right: 150px" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul  class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{'/'}}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'about'}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'blog'}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'contact'}}">Contact</a>
                    </li>

{{--                        <li><a href="{{ url('lang/en') }}">English</a></li>--}}
{{--                        <li><a href="{{ url('lang/ar') }}">العربية</a></li>--}}

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_bt">
                        <ul class="horizontal-list">
{{--                                <li><a href="{{'#'}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>--}}
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

                        </ul>



                    </div>
                </form>
            </div>
        </nav>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner_img"><img src="{{'images/herbal3.png'}}"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Herbal Remedies</h1>
                                    <h5 class="tasty_text">Herbal Remedies: Nature's Healing Solutions</h5>
                                    <p class="banner_text"> These remedies include herbs like peppermint, which can aid digestion; chamomile, known for its calming effects; and ginger, which helps with nausea and inflammation. Herbal remedies often come in various forms, such as teas, tinctures, and capsules. While they can offer numerous benefits, it's essential to use them wisely and consult with a healthcare professional, especially if you have underlying health conditions or are taking other medications. Herbs can be a valuable addition to
                                        a holistic approach to health, complementing a balanced diet and a healthy lifestyle. </p>
                                    <div class="btn_main">
                                        <div class="about_bt"><a href="{{url('about')}}">About Us</a></div>
                                        <div class="callnow_bt active"><a href="{{url('contact')}}">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div  class="banner_img"><img src="{{'images/healthyfood.png'}}"></div>
                            </div>
                            <div style="padding-bottom: 300px" class="col-md-6">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Healthy Food</h1>
                                    <h5 style="color: darkblue" class="tasty_text">Healthy Eating: The Foundation of Wellness</h5>
                                    <p class="banner_text">Healthy eating involves consuming a balanced diet that provides essential
                                        nutrients your body needs to function optimally. This includes a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats. A healthy diet supports overall well-being, boosts the immune system, and helps prevent chronic diseases such as heart disease, diabetes, and obesity. It also plays a crucial role in maintaining healthy weight, improving energy levels, and enhancing mental clarity. Adopting healthy
                                        eating habits can contribute to long-term health and improve quality of life.  </p>
                                    <div class="btn_main">
                                        <div class="about_bt"><a href="{{url('about')}}">About Us</a></div>
                                        <div class="callnow_bt active"><a href="{{url('contact')}}">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->



@yield('content')





<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="address_text">Address</h1>
                <p class="footer_text">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                <div class="location_text">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">fatimalkhl33@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="form-group">
                    <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                    <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div style="background: black" class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="copyright_text">2024 All Rights Reserved. <a href="https://html.design"></a></p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="footer_social_icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
