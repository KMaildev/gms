@extends('layouts.app')
@section('content')

<img src="{{asset('assets/data/contact.jpeg')}}" alt="">


{{-- <section class="page-title" style="background-image: url({{asset('assets/data/contact.jpeg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section> --}}

<!--Contact Details Start-->
<section class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="sec-title">
                    <span class="sub-title">Send us email</span>
                    <h2>Feel free to write</h2>
                </div>
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                        <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>Get in touch with us</h2>
                        <div class="text">Our recruitment specialists are always here to listen.<br>Say Hi To Us! Drop Us A Message Now</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon bg-theme-color2">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:95418443" style="font-size:16px;">
                                    +(959) 5418443</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a href="mailto:million.golden@gmail.com" style="font-size:16px;">million.golden@gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Visit anytime</h6>
                                <span style="font-size:16px;">No.(92),(G/F),Seikkantha St,Kyauktada T/S,
                                    Yangon.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!-- Divider: Google Map -->
<section>
    <div class="container-fluid p-0">
        <div class="row">
            <!-- Google Map HTML Codes -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0925064980042!2d96.16047747536608!3d16.77207262023902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec7d4c3f4dcd%3A0x25aa9c6da1ef1548!2sGolden%20Sea%20Myanmar%20Company%20Limited!5e0!3m2!1sen!2smm!4v1694579682886!5m2!1sen!2smm" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
    </div>
</section>
@endsection
