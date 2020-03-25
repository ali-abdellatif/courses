@extends('front.master')
@section('title')
    Course Details
@endsection
@section('content')
    <!-- Start Themeix Banner Wells -->
    <section class="themeix-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="themeix-wells-container">
                        <h2>{{$courses->name}}</h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Courses Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
    <!-- Start Themeix Course Info -->
    <section class="themeix-course-info">
        <div class="container">
            <div class="course-info-wrapper d-flex align-items-stretch themeix">
                <div class="course-info themeix wow fadeIn"  data-wow-duration="2s">
                    <div class="course-logo">
                        <img src="{{asset('front/images/course-info-instructor.png')}}" alt="course info img" />
                    </div>
                    <div class="course-meta-content light-text">
                        <p>{{optional($courses->user)->name}}</p>
                        <a href="course-grid-autor-right-sidebar.html">
                            <h5>{{optional($courses->user)->name}}</h5>
                        </a>
                    </div>

                </div>
                <div class="course-info themeix wow fadeIn"  data-wow-duration="2s">
                    <div class="course-logo"><img src="{{asset('front/images/course-info-logo.png')}}" alt="course info img" /></div>
                    <div class="course-meta-content">
                        <p>Duration</p>
                        <h5>18 Class - 36 Houre </h5>
                    </div>
                </div>
                <div class="course-info themeix wow fadeIn"  data-wow-duration="2s">
                    <div class="course-logo"><img src="{{asset('front/images/course-info-logo2.png')}}" alt="course info img" /></div>
                    <div class="course-meta-content">
                        <p>Student</p>
                        <h5>21589</h5>
                    </div>
                </div>
                <div class="course-info themeix wow fadeIn"  data-wow-duration="2s">
                    <div class="course-logo"><img src="{{asset('front/images/course-info-logo3.png')}}" alt="course info img" /></div>
                    <div class="course-meta-content">
                        <p>Course Fee</p>
                        <h5>{{$courses->price}}</h5>
                    </div>
                </div>
                <div class="course-info themeix">
                    <a href="{{url('booking/'.$courses->id)}}" class="course-info-btn">Enroll Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix  Course Info-->
    <!-- Start Themeix  Single-->
    <section class="themeix-Single section-spacing bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="themeix-single">
                        <div class="themeix-single-thumb"><img src="{{asset('front/images/courses-details-img.jpg')}}" alt="courses details img" /></div>
                        <p>Nam at volutpat, duis delectus, sed ullamcorper pulvinar sed. Quis amet, eget erat ut proident faucibus maecenas, suspendisse sed in aptent. Congue mauris pharetra ea tellus ut, diam consequat pede vitae mauris, volutpat maecenas
                            eget venenatis feugiat magna, laoreet sit sit erat non volutpat, ut a pellentesque mollis lectus placerat. Platea id porttitor mauris posuere sed. Commodo massa ornare mi, ligula nullam pulvinar nec elit.</p>
                        <h5>Requirement</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="themeix-single-list list-inline">
                                    <li><i class="fa fa-bookmark"></i> Platea id porttitor mauris posuere.</li>
                                    <li><i class="fa fa-bookmark"></i> Platea id porttitor mauris posuere.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="themeix-single-list list-inline">
                                    <li><i class="fa fa-bookmark"></i> Platea id porttitor mauris posuere.</li>
                                    <li><i class="fa fa-bookmark"></i> Platea id porttitor mauris posuere.</li>
                                </ul>
                            </div>
                        </div>
                        <p>mauris, volutpat maecenas eget venenatis feugiat magna, laoreet sit sit erat non volutpat, ut a pellentesque mollis lectus placerat. Platea id porttitor mauris posuere sed. Commodo massa ornare mi, ligula nullam pulvinar nec elit.</p>
                        <h5>Lesson</h5>
                        <div id="themeix-lesson-accordion">
                            <div class="themeix-card wow fadeIn"  data-wow-duration="2s">
                                <div class="card-header" id="headingOne">
                                    <button class="" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
                                        Lesson A
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#themeix-accordion">
                                    <div class="card-body">
                                        <p>Nam at volutpat, duis delectus, sed ullamcorper pulvinar sed. Quis amet, eget erat ut proident faucibus maecenas, suspendisse sed in aptent. Congue mauris pharetra ea tellus ut, diam consequat pede vitae mauris, volutpat maecenas eget venenatis feugiat magna, laoreet sit sit erat non volutpat, ut a pellentesque mollis lectus placerat. Platea id porttitor mauris posuere sed. Commodo massa ornare mi, ligula nullam pulvinar nec elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="themeix-card wow fadeIn"  data-wow-duration="2s">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                                        Lesson B
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#themeix-accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Basic Media Planning Lesson.</a></li>
                                            <li><a href="#">Our Eduzone Info Design : Part 03</a></li>
                                            <li><a href="#">Basic Video Class Of Eduzone.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="themeix-card wow fadeIn"  data-wow-duration="2s">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                                        Lesson C
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#themeix-accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Basic Media Planning Lesson.</a></li>
                                            <li><a href="#">Our Eduzone Info Design : Part 03</a></li>
                                            <li><a href="#">Basic Video Class Of Eduzone.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Review</h5>
                        <div class="themeix-review wow fadeIn"  data-wow-duration="2s">
                            <div class="themeix-review-circle">
                                <div class="themeix-progress">
                                    <span class="progress-left">
										<span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
										<span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">4.8</div>
                                </div>
                                <h5>Avarage rating</h5>
                                <ul class="popular-course-review list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="themeix-review-progress">
                                <div class="themeix-prograss">
                                    <div class="progress-label">5 Star</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;">85%</div>
                                    </div>
                                </div>
                                <div class="themeix-prograss">
                                    <div class="progress-label">3 Star</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 65%;">65%</div>
                                    </div>
                                </div>
                                <div class="themeix-prograss">
                                    <div class="progress-label">4 Star</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;">70%</div>
                                    </div>
                                </div>
                                <div class="themeix-prograss">
                                    <div class="progress-label">1 Star</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 20%;">20%</div>
                                    </div>
                                </div>
                                <div class="themeix-prograss">
                                    <div class="progress-label">2 Star</div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;">35%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="themeix-sidebar-left">
                        <form class="sidebar-search sidebar-widget" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search course">
                                <span class="input-group-btn">
								 <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
								 </span>
                            </div>
                        </form>
                        <h4 class="sidebar-title">Categories</h4>
                        <ul class="sidebar-category sidebar-widget list-group">
                            @foreach($categories as $category)
                                <li class="list-group-item d-flex justify-content-between">
                                    <a href="single.html">{{$category->name}}</a>
                                    <span class="badge"><i class="fa fa-folder-open"></i></span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Featured Course</h4>
                            <div class="popular-course-post wow fadeIn"  data-wow-duration="3s">
                                <div class="popular-course-thumb" style="background-image:url({{asset('front/images/popular-course.jpg')}});">
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


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Single -->
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
