<!--Header -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.themeton.com/tenguu-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 23:02:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>{{('Cinema Hub')}}</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Themeton" >
    <meta name="description" content="Tenguu Cinema - Movie Theater Template">
    <meta name="author" content="Themeton">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/photoes/favicon.png')}}"/>

    <link href='../../fonts.googleapis.com/css8561.css?family=Roboto:400,100,100italic,300,300ita%e2%80%8c%e2%80%8blic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../fonts.googleapis.com/cssd2d5.css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/web/packages.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/web/default.css') }}" >
</head>
<body class="sticky-menu">
    <div id="loader">
        <div class="loader-ring">
          <div class="loader-ring-light"></div>
          <div class="loader-ring-track"></div>
        </div>
    </div>
    <div class="wrapper">
 <header id="header" class="menu-top-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-4">
                <a href="#" id="logo" title="Cinema HuB" class="logo-image" data-bg-image="{{asset('public/photoes/logo.png')}}">Cinema HuB
                </a>
            </div>
            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-8 phl0">
                <div class="header_author">
                    <a href="#">Ibrahim Gad</a>
                    <img src="{{asset('public/photoes/user.png')}}" class="user" alt="user">
                </div>
                <div class="header_ticket">
                    <a href="#order" class="order_btn">My tickets</a>
                    <span>3</span>
                </div>
                <a href="javascript:;" id="header-search"></a>
                <div class="button_container" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</div>
<div class="overlay" id="overlay">
<a href="javascript:;" class="close-window"></a>
  <nav class="overlay-menu">
    <ul >
        <li ><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="single.html">Single</a></li>
        <li><a href="#order" class="order_btn">Order</a></li>
    </ul>
  </nav>
</div>            </div>
        </div>
    </div>
</header>
    <!-- End Header -->
@yield('content')
    <!--Footer --> 
    <footer id="footer">
        <div class="container footer-container">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">Menu</h5>
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">Order</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="social-links">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">Address information</h5>
                        <p>
                            California. AMC Dine-In Theatres Marina,
                            Street 26, Distritc 543 #108
                         </p> 
                         <p>
                            <i class="fa fa-mail"></i>Example@mail.com<br>
                            <i class="fa fa-phone"></i> + 123 456 7890
                         </p> 
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="widget">
                    <h5 class="widget-title">Leave a message</h5>
                        <form class="contact_form transparent">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" class="inputValidation" name="name" placeholder="Name *">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="inputValidation" name="email" placeholder="Email *">
                                </div>
                                <div class="col-sm-12 ">
                                    <textarea class="inputValidation" placeholder="Message *"></textarea>
                                    <button type="submit" class="button fill rectangle">Send to us</button>
                                </div>
                            </div>
                        </form>
                        <div class="errorMessage"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row copyright-text">
                    <div class="col-sm-12 text-center">
                        <p class="mv3 mvt0">&copy; Copyrights 2017 Tenguu. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer -->
</div>
<!-- JS goes here -->
    <script type="text/javascript" src="{{asset('public/js/web/jquery.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('public/js/web/packages.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/web/scripts.min.js')}}"></script>
<!-- -->
</body>
</html>