<!DOCTYPE HTML>
<html lang="en-US">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Mirrored from demo.themeix.com/html/eduzone/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 11:09:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Eduzone is A Responsive HTML5 template for Blog site etc website." />
    <meta name="author" content="Themeix" />
    <title> Eduzone - @yield('title')</title>
    <!--  Add Favicon Icon-->
    <link rel="shortcut icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon">
    <!-- Add All Style -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/slimmenu.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}" />
    <!-- <link rel="stylesheet" href="css/zabuto_calendar.min.css" /> -->
    <link rel="stylesheet" href="{{asset('front/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}" />
    <!-- Poppins Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRoboto+Slab" rel="stylesheet">
</head>
<body>
<header class="themeix-header">
    <div class="themeix-header-top bg-color2">
        <div class="container">
            <div class="d-flex justify-content-between themeix">
                <div class="themeix-top-bar-left">
                    <p class="top-content"><a href="https://demo.themeix.com/cdn-cgi/l/email-protection#295a5c5959465b5d695d414c444c4051074a4644"><span class="__cf_email__" data-cfemail="097a7c7979667b7d497d616c646c6071276a6664">[email&#160;protected]</span></a></p>
                </div>
                <div class="themeix-top-bar-right">
                        @guest
                        <a class="top-sign-btn" href="contact.html" data-toggle="modal" data-target="#login-modal" id="log">
                            <i class="fa fa-user"></i>
                                Sign In
                        </a>
                        @else
                            <a id="navbarDropdown" class="top-sign-btn dropdown-toggle" href="contact.html" role="button"
                               data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        @endguest
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="top-login-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="tmx-loginform" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tmx-loginform">Login Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form-modal">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Pasword">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary login-btn">{{ __('Login') }}</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="message">Not registered? <a href="#register">Create an account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="themeix-header-navigation bg-color">
        <div class="container">
            <div class="d-flex justify-content-between themeix">
                <div class="themeix-logo">
                    <a class="themeix-brand" href="{{url('/')}}"><img src="{{asset('front/images/header-logo.png')}}" alt="header brand" /></a>
                </div>
                <nav class="themeix-menu">
                    <ul id="navigation-menu" class="slimmenu">
{{--                        <li><a href="{{url('/')}}">Home</a></li>--}}
                        <li><a href="{{url('about')}}">About</a></li>
                        <li>
                            <a href="{{url('courses')}}">Course </a>
{{--                            <ul>--}}
{{--                                <li><a href="">Course Column 3</a></li>--}}
{{--                                <li><a href="course-grid-2.html">Course Column 2</a></li>--}}
{{--                                <li><a href="course-grid-left-sidebar.html">Course Grid Left Sidebar</a></li>--}}
{{--                                <li><a href="course-grid-right-sidebar.html">Course Grid Right Sidebar</a></li>--}}
{{--                                <li><a href="course-list.html">Course List</a></li>--}}
{{--                                <li><a href="course-list-left-sidebar.html">Course List Left Sidebar</a></li>--}}
{{--                                <li><a href="course-list-right-sidebar.html">Course List Right Sidebar</a></li>--}}
{{--                                <li><a href="course-details.html">Course Details</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li>
                            <a href="#">Lesson </a>
                            <ul>
                                <li><a href="{{url('lesson')}}">Lesson Right Sidebar</a></li>
                                <li><a href="lesson-left-sidebar.html">Lesson Left Sidebar</a></li>
                                <li><a href="lesson-full-width.html">Lesson Full Width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="event-details.html">Event Details</a></li>
                                <li><a href="forum.html">Forum</a></li>
                                <li><a href="gallery-v1.html">Gallery V1</a></li>
                                <li><a href="gallery-v2.html">Gallery V2</a></li>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="instructors-details.html">Instructor Details</a></li>

                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                <li><a href="single.html">Blog Details</a></li>
                                <li><a href="author.html">Author</a></li>
                                <li><a href="tag.html">Tag</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End Themeix Header -->
@yield('content')

<!-- Start Themeix Footer -->
<footer class="themeix-footer bg-color5">
    <div class="themeix-footer-container section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="themeix-footer-widget wow fadeIn"  data-wow-duration="2s">
                        <div class="themeix-footer-logo"><a href="{{url('/')}}"><img src="{{asset('front/images/footer-logo.png')}}" alt="footer logo img" /></a></div>
                        <p>Diam ligula, vitae in. Eros cursus class dui. auctor bibendum magnis nulla massa. Molest condimentum mauris ligula tortor</p>
                        <ul class="themeix-footer-social list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                        <h5>Call Us</h5>
                        <h6>00-659-896-456</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="themeix-footer-widget wow fadeIn"  data-wow-duration="2s">
                        <h4>Quick Link</h4>
                        <ul class="themeix-footer-single list-inline">
                            <li class="list-inline-item"><a href="#">support forum</a></li>
                            <li class="list-inline-item"><a href="#">faq & help center</a></li>
                            <li class="list-inline-item"><a href="#">about us</a></li>
                            <li class="list-inline-item"><a href="#">register and account</a></li>
                            <li class="list-inline-item"><a href="#">services & Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="themeix-footer-widget wow fadeIn"  data-wow-duration="2s">
                        <h4>About Us</h4>
                        <ul class="themeix-footer-category list-inline">
                            <li class="list-inline-item"><a href="#">support forum</a></li>
                            <li class="list-inline-item"><a href="#">faq & help center</a></li>
                            <li class="list-inline-item"><a href="#">about us</a></li>
                            <li class="list-inline-item"><a href="#">register and account</a></li>
                            <li class="list-inline-item"><a href="#">services & Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn"  data-wow-duration="2s">
                    <div class="themeix-footer-widget m-0">
                        <h4>Contact Form</h4>
                        <form method="post" action="{{url('contact')}}" class="themeix-footer-form">
                            @csrf
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn-style1 btn-color1 btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="themeix-footer-intro text-center">
        <div class="container">
            <p>&copy; Copyright - 2018  Eduzone - Designed by <a href="http://themeix.com/">Themeix</a> </p>
        </div>
    </div>
</footer>
<!-- End Themeix Footer -->
<!-- Add Javascript File -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.slimmenu.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/zabuto_calendar.min.js')}}"></script>
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/waypoint.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnh74UN6BKgq9U5fMNGhdZOSpmM_QnZqs"></script>
<script src="{{asset('front/js/custom.js')}}"></script>
</body>

<!-- Mirrored from demo.themeix.com/html/eduzone/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Mar 2020 11:09:38 GMT -->
</html>
