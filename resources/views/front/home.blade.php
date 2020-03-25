@extends('front.master')
@section('title')
    HomePage
@endsection
@section('content')

    <!-- Start Themeix Slider -->
    <section class="themeix-slider section-overlay  bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="themeix-slider-content">
                        <h1> <span>Education</span> & Training Organization.</h1>
                        <p>we proviet best education system for you  amet mauris lobortis mauris inceptos eget. Urna imperdiet.</p>
                        <div class="themeix-slider-btn">
                            <a class="themeix-btn btn btn-primary" href="#">Our Course</a>
                            <a class="themeix-btn2 btn btn-primary" href="{{url('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
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
                                    <a href="course-grid.html">Jhon Doe</a>
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
                                        <a class="popular-course-enroll" href="course-details.html">enroll now</a>
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
                                <p>Vitae Eget ultrices magna ornare tellus molestie.</p>
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
                        <div class="popular-course-post wow fadeIn"  data-wow-duration="1s">
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
                    <div class="themeix-video-thumb section-overlay" style="background-image:url({{asset('front/images/video-bg.jpg')}});">
                        <a class="themeix-video-play" href="#">
                            <i class="fa fa-play" aria-hidden="true"></i>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Popular -->
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
    <!-- Start Themeix  Feature-->
    <section class="themeix-events section-spacing bg-color">
        <div class="container">
            <div class="themeix-section-title">
                <h2>Upcoming Event</h2>
                <div class="section-border left-border"></div>
            </div>
            <div class="upcoming-event-container">
                @foreach($events as $event)
                    <div class="upcoming-event-wrapper">
                        <div class="row">
                            <div class="col-md-8 col-sm-7">
                                <div class="upcoming-event-details wow fadeIn"  data-wow-duration="1s">
                                    <div class="upcoming-event-logo">
                                        <h2>{{$event->day}}</h2>
                                        <h5>{{$event->month}}</h5>
                                    </div>
                                    <div class="upcoming-event-content">
                                        <h4>{{$event->title}}</h4>
                                        <ul class="upcoming-event-meta list-inline">
                                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$event->time}}</li>
                                            <li class="list-inline-item"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$event->address}}</li>
                                        </ul>
                                        <a class="upcoming-event-btn" href="#">register</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="upcoming-event-thumb">
                                    <img src="{{asset('front/images/upcoming-event.jpg')}}" alt="upcoming event img" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Themeix Feature -->
    <!-- Start Themeix Resgister -->
    <section class="themeix-resgister bg-color4">
        <div class="themeix-resgister-wrapper section-spacing" id="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('register') }}" method="Post"
                              class="resgister-form wow fadeIn "  data-wow-duration="2s">
                            @csrf
                            <div class="resgister-form-text">
                                <h2>Register Now</h2>
                                <p>Create your account and browse <br/>thousand of courses!!</p>
                                <div class="resgister-form-triangle"></div>
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Success! Sign up just completed.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" placeholder="Your Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" placeholder="Email Address" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                       placeholder="Choose a password" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control" required autocomplete="new-password"
                                       placeholder="Confirm Your Password" name="password_confirmation" type="password">
                            </div>
                            <button type="submit" class="btn-style1 btn-color1 btn btn-primary">{{ __('Register') }} sing up now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Resgister -->
    <!-- Start Themeix Pannel -->
    <section class="themeix-pannel clearfix">
        <div class="themeix-pannel-main">
            <div class="pannel-column pannel-one">
                <div class="pannel-wrapper">
                    <div class="pannel-logo tmx-box-icon"><i class="fa fa-book"></i></div>
                    <h2>Course Integrated</h2>
                    <p>Contacr Dewaty Feaert</p>
                </div>
            </div>
            <div class="pannel-column pannel-two">
                <div class="pannel-wrapper">
                    <div class="pannel-logo tmx-box-icon"><i class="fa fa-file-video-o"></i></div>
                    <h2>Video Supported</h2>
                    <p>Contacr Dewaty Feaert</p>
                </div>
            </div>
            <div class="pannel-column pannel-three ">
                <div class="pannel-wrapper">
                    <div class="pannel-logo tmx-box-icon"><i class="fa fa-tachometer"></i></div>
                    <h2>Clean Layout</h2>
                    <p>Contacr Dewaty Feaert</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix -->
    <!-- Start Themeix Testimonial-->
    <section class="themeix-testimonial section-spacing bg-color clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="themeix-section-title text-center">
                        <h2>Our Instructor</h2>
                        <div class="section-border"></div>
                        <p>Enim semper, gravida interdum nullam, pellentesque adipiscing scelerisque vitae dui, magnis platea. Ac sagittis ridiculus  Est ac sollicitudin varius integer laoreet morbi  porta  </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-instructor-carousel owl-carousel">
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb">
                            <img src="{{asset('front/images/testimonial-author.jpg')}}" alt="testimonial author img" />
                        </div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>L. Bohan</h5>
                            </a>
                            <p>Teacher</p>
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
                                <h5>Michael E.</h5>
                            </a>
                            <p>Physics Teacher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="3s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author2.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>J. Renz</h5>
                            </a>
                            <p>Ext. Instructor</p>
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
                                <h5>Natalie Wang</h5>
                            </a>
                            <p>Instructor</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author3.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Alannah Varley</h5>
                            </a>
                            <p>Instructor</p>
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
                                <h5>Maya Joske</h5>
                            </a>
                            <p>Department Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="2s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author4.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Roboto Max</h5>
                            </a>
                            <p>Jr. Instructor</p>
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
                                <h5>Sr. Instructor</h5>
                            </a>
                            <p>Banking Departmental Head</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-instructor wow fadeIn"  data-wow-duration="3s">
                    <div class="testimonial-info">
                        <div class="testimonial-info-thumb"><img src="{{asset('front/images/testimonial-author5.jpg')}}" alt="testimonial author img" /></div>
                        <div class="testimonial-info-content">
                            <a href="author.html">
                                <h5>Jaxon Tucker</h5>
                            </a>
                            <p>Instructor</p>
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
                                <h5>Michael Morrill</h5>
                            </a>
                            <p>Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Testimonial-->
    <!-- Start Themeix About Author -->
    <section class="themeix-about-author section-spacing section-overlay clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="themeix-section-title themeix-title-inverse text-center">
                        <h2>What People Say</h2>
                        <div class="section-border"></div>
                        <p>Enim semper, gravida interdum null pellentesque adipiscing scelerisque vitae magnis platea. Ac sagittis ridiculus  pellentesque. Est ac sollicitudin varius integer laoreet morbi porta </p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel about-author-info-carousel">
                <div class="about-author-info">
                    <div class="about-author-thumb"><img src="{{asset('front/images/about-author.png')}}" alt="testimonial author img" /></div>
                    <div class="about-author-content">
                        <a href="author.html">Roboto Max</a>
                        <span>Company of Nation</span>
                        <p>Tellus at vulputate nulla neccommodovolutpat nec consectetur tempor magna morbi nec erat maecenas mattis mauris vel tempus nunc nam. Nunc sed sit aenean eos, fringilla quis id, fringilla s</p>
                        <img src="{{asset('front/images/about-author-sign.png')}}" alt="about-author img" />
                    </div>
                </div>
                <div class="about-author-info">
                    <div class="about-author-thumb"><img src="{{asset('front/images/about-author2.png')}}" alt="testimonial author img" /></div>
                    <div class="about-author-content">
                        <a href="author.html">Roboto Max</a>
                        <span>Company of Nation</span>
                        <p>Tellus at vulputate nulla neccommodovolutpat nec consectetur tempor magna morbi nec erat maecenas mattis mauris vel tempus nunc nam. Nunc sed sit aenean eos, fringilla quis id, fringilla s</p>
                        <img src="{{asset('front/images/about-author-sign2.png')}}" alt="about-author img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Testimonial -->
    <!-- Start Themeix Feature-->
    <section class="latest-news-box section-spacing bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="themeix-section-title text-center">
                        <h2>Latest News</h2>
                        <div class="section-border"></div>
                        <p>Enim semper, gravida interdum nullam, pellentesque adipiscing scelerisque vitae dui, magnis platea. Ac sagittis ridiculus Est ac sollicitudin varius integer laoreet morbi porta</p>
                    </div>
                </div>
            </div>
            <div class="blog-post-wrapper-1">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="themeix-blog-post wow fadeIn"  data-wow-duration="2s">
                            <div class="themeix-blog-thumb"><a href="single.html"><img src="{{asset('front/images/blog-img.jpg')}}" alt="blog img" /></a></div>
                            <div class="themeix-blog-details">
                                <a href="#">
                                    <h5>The Certificate giving ceremonyin.</h5>
                                </a>
                                <ul class="themeix-blog-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comment-o"></i> 03 comments
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="themeix-blog-post wow fadeIn"  data-wow-duration="2s">
                            <div class="themeix-blog-thumb"><a href="single.html"><img src="{{asset('front/images/blog-img2.jpg')}}" alt="blog img" /></a></div>
                            <div class="themeix-blog-details">
                                <a href="#">
                                    <h5>Education is the Powerful Weapon.</h5>
                                </a>
                                <ul class="themeix-blog-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comment-o"></i>  07 comments
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="themeix-blog-post wow fadeIn"  data-wow-duration="2s">
                            <div class="themeix-blog-thumb"><a href="single.html"><img src="{{asset('front/images/blog-img3.jpg')}}" alt="blog img" /></a></div>
                            <div class="themeix-blog-details">
                                <a href="#">
                                    <h5>Tellus at vulputate nulla commodo. </h5>
                                </a>
                                <ul class="themeix-blog-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author.html"><i class="fa fa-user-o"></i> hinox mox</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comment-o"></i>  01 comment
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            </div>r
            <div class="subscribe-triangle"></div>
        </div>
        <div class="subscribe-column themeix-subscribe-thumb bg-color themeix">
        </div>
    </section>
    <!-- End Themeix Subscribe -->

@endsection
