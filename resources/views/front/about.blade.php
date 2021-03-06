@extends('front.master')
@section('title')
    About Us
@endsection
@section('content')

    <!-- End Themeix Header -->
    <!-- Start Themeix Banner Wells -->
    <section class="themeix-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="themeix-wells-container">
                        <h2>About Us</h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
    <!-- Start Themeix Feature-->
    <section class="themeix-feature section-spacing bg-color">
        <div class="container">
            <div class="services-container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                            <div class="services-logo"><img src="{{asset('front/images/video-logo.png')}}" alt="services img" /></div>
                            <div class="services-details">
                                <h5>Best Multi-Tier Courses</h5>
                                <p>Education System</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                            <div class="services-logo"><img src="{{asset('front/images/video-logo2.png')}}" alt="services img" /></div>
                            <div class="services-details">
                                <h5>Easy to Use Video Panels</h5>
                                <p>Best LMS Systeam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services-wrapper wow fadeIn"  data-wow-duration="2s">
                            <div class="services-logo"><img src="{{asset('front/images/video-logo3.png')}}" alt="services img" /></div>
                            <div class="services-details">
                                <h5>Multi Purpose Dashboard</h5>
                                <p>Online Education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="themeix-section-title">
                        <h2>Why Choose Us</h2>
                        <div class="section-border left-border"></div>
                        <p>Auctor eleifend egestas felis a suscipit, amet ultricies orci. Eget nonummy ultrices magna ornare tellus molestie.</p>
                    </div>
                    <div class="themeix-video-details wow fadeIn"  data-wow-duration="1s">
                        <div class="themeix-video-logo"><img src="{{asset('front/images/video-logo.png')}}" alt="video logo" /></div>
                        <div class="themeix-video-content">
                            <h5>Best Education System</h5>
                            <p>Advance Education Management</p>
                        </div>
                    </div>
                    <div class="themeix-video-details wow fadeIn"  data-wow-duration="2s">
                        <div class="themeix-video-logo"><img src="{{asset('front/images/video-logo2.png')}}" alt="video logo" /></div>
                        <div class="themeix-video-content">
                            <h5>Learning Management</h5>
                            <p>LMS Integration</p>
                        </div>
                    </div>
                    <div class="themeix-video-details wow fadeIn"  data-wow-duration="3s">
                        <div class="themeix-video-logo"><img src="{{asset('front/images/video-logo3.png')}}" alt="video logo" /></div>
                        <div class="themeix-video-content">
                            <h5>Online Certification</h5>
                            <p>Performance Based Certificate</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="picture-module d-flex align-items-center">
                        <img src="{{asset('front/images/courses-details-img.jpg')}}" alt="Picture"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Feature -->
    <!-- Start Themeix Counter-->
    <section class="themeix-counter section-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="themeix-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                        <h3>3265</h3>
                        <p>Passed Graduates</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="themeix-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                        <h3>256 +</h3>
                        <p>Courses Published</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="themeix-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                        <h3>256</h3>
                        <p>Qualified Staff</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="themeix-counter-wrapper wow zoomIn"  data-wow-duration="2s">
                        <h3>155</h3>
                        <p>Countries Reachd</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Counter -->
    <!-- Start Themeix Popular-->
    <section class="themeix-popular section-spacing bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="themeix-section-title text-center">
                        <h2>Our Popular Courses</h2>
                        <div class="section-border"></div>
                        <p>Enim semper, gravida interdum nullam, pellentesque adipiscing scelerisque vitae dui, magnis platea. Ac sagittis ridiculus Est ac sollicitudin varius integer laoreet morbi porta</p>
                    </div>
                </div>
            </div>
            <div class="scb-minus-30">
                <div class="row">
                    <div class="col-md-4">
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="2s">
                            <div class="popular-course-thumb" style="background-image:url({{asset('front/images/popular-course.jpg')}});">
                                <div class="popular-course-teacher popular-color1">
                                    <a href="course-grid.html">jon rock</a>
                                    <img src="{{asset('front/images/popular-course-teacher.png')}}" alt="popular course teacher img" />
                                </div>
                            </div>
                            <div class="popular-course-content ">
                                <a href="course-grid.html">
                                    <h5>Business Development</h5>
                                </a>
                                <div class="themeix-rating-area">
                                    <ul class="popular-course-review list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <ul class="popular-course-student list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user"></i> 230
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments"></i> 05
                                        </li>
                                    </ul>
                                </div>
                                <p>Eget nonummy ultrices magna ornare tellus molestie.</p>
                                <div class="popular-course-meta">
                                    <div class="themeix-course-action">
                                        <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                        <a class="popular-course-enroll" href="{{asset('front/course-details.html')}}">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="3s">
                            <div class="popular-course-thumb" style="background-image:url({{asset('front/images/popular-course2.jpg')}});">
                                <div class="popular-course-teacher popular-color2">
                                    <a href="course-grid.html">jon rock</a>
                                    <img src="{{asset('front/images/popular-course-teacher.png')}}" alt="popular course teacher img" />
                                </div>
                            </div>
                            <div class="popular-course-content ">
                                <a href="course-grid.html">
                                    <h5>Digital Marketing Strategy </h5>
                                </a>
                                <div class="themeix-rating-area">
                                    <ul class="popular-course-review list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <ul class="popular-course-student list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user"></i> 230
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments"></i> 05
                                        </li>
                                    </ul>
                                </div>
                                <p>Vitae habitasse senectus mattis elit semperrhoncus est etiam.</p>
                                <div class="popular-course-meta">
                                    <div class="themeix-course-action">
                                        <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                        <a class="popular-course-enroll" href="course-details.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="popular-course-post m-0 wow fadeIn"  data-wow-duration="1s">
                            <div class="popular-course-thumb" style="background-image:url({{asset('front/images/popular-course3.jpg')}});">
                                <div class="popular-course-teacher popular-color3">
                                    <a href="course-grid.html">jon rock</a>
                                    <img src="{{asset('front/images/popular-course-teacher.png')}}" alt="popular course teacher img" />
                                </div>
                            </div>
                            <div class="popular-course-content ">
                                <a href="course-grid.html">
                                    <h5>Website Development</h5>
                                </a>
                                <div class="themeix-rating-area">
                                    <ul class="popular-course-review list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <ul class="popular-course-student list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user"></i> 230
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments"></i> 05
                                        </li>
                                    </ul>
                                </div>
                                <p>Auctor eleifend egestas felis a suscipit, amet ultricies.</p>
                                <div class="popular-course-meta">
                                    <div class="themeix-course-action">
                                        <a class="popular-course-price popular-color1" href="course-details.html">free</a>
                                        <a class="popular-course-enroll" href="course-details.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Popular -->
    <!-- Start Themeix Testimonial-->
    <section class="themeix-testimonial scb-minus-30 themeix-testimonial-img section-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="themeix-section-title themeix-title-inverse text-center">
                        <h2>Our Instructor</h2>
                        <div class="section-border"></div>
                        <p>Enim semper, gravida interdum nullam, pellentesque adipiscing scelerisque vitae dui, magnis platea. Ac sagittis ridiculus  Est ac sollicitudin varius integer laoreet morbi  porta  </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-instructor-carousel owl-carousel">
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                    <div class="testimonial-hover">
                        <div class="testimonial-hover-wrap">
                            <ul class="testimonial-hover-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author2.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                    <div class="testimonial-hover">
                        <div class="testimonial-hover-wrap">
                            <ul class="testimonial-hover-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author3.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                    <div class="testimonial-hover">
                        <div class="testimonial-hover-wrap">
                            <ul class="testimonial-hover-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                    <div class="testimonial-hover">
                        <div class="testimonial-hover-wrap">
                            <ul class="testimonial-hover-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author2.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                    <div class="testimonial-hover">
                        <div class="testimonial-hover-wrap">
                            <ul class="testimonial-hover-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Testimonial-->
    <!-- Start Themeix Feature-->
    <div class="themeix-feature section-spacing bg-color">
        <div class="container">
            <div class="themeix-client-carousel owl-carousel">
                <div class="themeix-client-logo">
                    <a href="#"><img src="{{asset('front/images/client-logo.png')}}" alt="client ads img" /></a>
                </div>
                <div class="themeix-client-logo">
                    <a href="#"><img src="{{asset('front/images/client-logo2.png')}}" alt="client ads img" /></a>
                </div>
                <div class="themeix-client-logo">
                    <a href="#"><img src="{{asset('front/images/client-logo3.png')}}" alt="client ads img" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Themeix Feature-->
    <!-- Start Themeix Subscribe-->
    <section class="themeix-subscribe d-flex align-items-stretch themeix">
        <div class="subscribe-column section-spacing bg-color2 themeix">
            <div class="themeix-subscribe-wrapper">
                <h2>Subscribe For Letest News</h2>
                <form class="themeix-subscribe-form wow fadeIn"  data-wow-duration="2s" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Search" required="">
                        <span class="input-group-btn">
                     <button class="btn btn-secondary" type="submit"><i class="fa fa-paper-plane"></i></button>
                     </span>
                    </div>
                </form>
            </div>
            <div class="subscribe-triangle"></div>
        </div>
        <div class="subscribe-column themeix-subscribe-thumb bg-color themeix">
        </div>
    </section>
    <!-- End Themeix Subscribe -->

@endsection
