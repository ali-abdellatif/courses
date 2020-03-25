@extends('front.master')
@section('title')
    ContactPage
@endsection
@section('content')

    <!-- Start Themeix Banner Wells -->
    <section class="themeix-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="themeix-wells-container">
                        <h2>Contact</h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
    <!-- Start Themeix Feature-->
    <div class="themeix-feature section-spacing bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="{{asset('front/images/contact-info-logo4.png')}}" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Office Address</h4>
                            <p>1-13 St Giles High St,<br>London WC2H 8AG, UK</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="{{asset('front/images/contact-info-logo6.png')}}" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Email Address</h4>
                            <p><a href="https://demo.themeix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b7bbb9a4b5baadbdbab2bb94b3b9b5bdb8fab7bbb9">[email&#160;protected]</a><br><a href="https://demo.themeix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d34333b321d3a303c3431733e3230">[email&#160;protected]</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-info m-0 wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-info-logo">
                            <img src="{{asset('front/images/contact-info-logo5.png')}}" alt="" />
                        </div>
                        <div class="contact-info-content">
                            <h4>Office Time</h4>
                            <p>Mon - Sat 9:00 - 5:00<br>Sunday - Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Themeix Feature-->
    <!-- Start Themeix Contact-->
    <section class="themeix-contact bg-color4 section-spacing clearfix">
        <div class="container">
            <div class="d-flex align-items-stretch themeix">
                <div class="contact-column bg-color themeix">
                    <form method="post" action="{{url('contact')}}" class="contact-resgister-form wow fadeIn "  data-wow-duration="2s">
                        @csrf
                        <h2>Send us message</h2>
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" placeholder="Write Message" cols="30" rows="10"></textarea>
                        </div>
                        <input name="submit" type="submit" class="btn-style1 btn-color1 btn btn-primary" value="Send Message">
                    </form>
                </div>
                <div class="contact-resgister-info contact-column bg-color2">
                    <h2>Get in Touch</h2>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="{{asset('front/images/contact-info-logo.png')}}" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p>432 Zafer Street New <br> youk 234 America</p>
                        </div>
                    </div>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="{{asset('front/images/contact-info-logo2.png')}}" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p>+(666) 053 39985 <br> +(333) 026 58963</p>
                        </div>
                    </div>
                    <div class="contact-resgister-info-wrapper wow fadeIn"  data-wow-duration="2s">
                        <div class="contact-resgister-info-logo"><img src="{{asset('front/images/contact-info-logo3.png')}}" alt="" /></div>
                        <div class="contact-resgister-info-content">
                            <p><a href="https://demo.themeix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="52263a373f373b2a12353f333b3e7c313d3f">[email&#160;protected]</a> <br> <a href="https://demo.themeix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e0939590908f9294a09488858d858998ce838f8d">[email&#160;protected]</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Contact -->

@endsection
