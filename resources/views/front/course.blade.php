@extends('front.master')
@section('title')
    Courses List
@endsection
@section('content')
    <!-- Start Themeix Banner Wells -->
    <section class="themeix-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="themeix-wells-container">
                        <h2>Courses List </h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
    <!-- Start Themeix  Course-->
    <section class="themeix-course section-spacing bg-color">
        <div class="container">
            <div class="row">
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
                <div class="col-md-8">
                    @foreach($courses as $course)
                        <div class="popular-course-post2">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="popular-course-thumb" style="background-image:url({{asset($course->photo)}})"> </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="popular-course-details wow fadeIn"  data-wow-duration="2s">
                                        <a href="{{url('subCategory/'.$course->id)}}">
                                            <h3>{{$course->name}}</h3>
                                        </a>
                                        <p>Eget tellus vivamus. Iaculis wisi quis, velit dis gravida in dolor risus. A sed. Faucibus sollicitudin fusce erat ut pellentesque</p>
                                        <div class="themeix-course-action-2">
                                            <ul>
                                                <li><span>{{$course->price}}</span></li>
                                                <li>
                                                    <a class="popular-course-enroll" href="{{url('booking/'.$course->id)}}">Enroll Now</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <nav class="themeix-pagination text-left">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- End Themeix Course -->
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
