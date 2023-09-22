@extends('layouts.app')
@section('content')
    <section class="contact-section">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 py-5">
                        <img src="{{ asset('data/md.png') }}" alt=""
                            style="width: 100%; border-radius: 0% 20%;  border: 5px solid #FA8714;">
                    </div>

                    <div class="title-column col-lg-8 col-md-8 col-sm-6 wow fadeInLRight py-5">
                        <div class="inner-column" style="padding: 0px 0 0px;">
                            <div class="sec-title">
                                <span class="sub-title">contact with us</span>
                                <h2>
                                    Right Job for right people
                                    <span class="color3">
                                        under easy process
                                    </span>
                                </h2>

                                <div class="text text-black" style="font-size: 18px;">
                                    The best service of Golden Sea Myanmar Co., Ltd is, supplying
                                    Myanmar workers for your business, with confidence.
                                </div>


                                <div class="btn-box py-3">
                                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-four">
                                        <span class="btn-title">
                                            Contact us with trust
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="about-section" style="padding: 0px 0 70px;">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">
                                about the company
                            </span>

                            <h2>OVERSEAS MANPOWER RECRUITMENT <span class="color3">COMPANY</span></h2>
                            <h4 style="color:orange; text-shadow:1px 1px 1px;">Golden Sea Myanmar .......</h4>
                            <div class="text">
                                We are dedicated to connecting talented individuals with exciting employment opportunities
                                around the world. With a passion for helping people achieve their career aspirations, we
                                have become a trusted partner for both job seekers and employers looking for exceptional
                                talent.
                            </div>
                        </div>

                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <i class="icon flaticon-passport-16"></i>
                                    <h6 class="title">Best Immigration<br> Services</h6>
                                </div>
                            </div>

                            <div class="text-block col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="text">We have to a tendency to believe the idea that smart looking.</div>
                                </div>
                            </div>
                        </div>

                        <div class="btm-box">
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Read More
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="row">
                            <div class="column col-lg-7 col-md-7">
                                <div class="image-box">
                                    <figure class="map"><img src="{{ asset('assets/images/icons/map.png') }}"
                                            alt=""></figure>
                                    <figure class="image-1 overlay-anim wow fadeInUp"><img
                                            src="{{ asset('assets/data/a3.jpg') }}" alt=""></figure>
                                    <figure class="image-2 overlay-anim wow fadeInRight"><img
                                            src="{{ asset('assets/data/a5.jpg') }}" alt=""></figure>
                                    {{-- <div class="experience bounce-y">
                                    <div class="inner">
                                        <i class="icon flaticon-loyalty"></i>
                                        <div class="text"><strong>3800</strong> Satisfied Clients</div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                            <div class="column col-lg-5 col-md-5">
                                <div class="image-box">
                                    <figure class="image-3 overlay-anim wow fadeInLeft"><img
                                            src="{{ asset('assets/data/a10.png') }}" alt=""></figure>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 py-5 wow ">
                        <img src="{{ asset('data/country.png') }}" alt="" style="filter: drop-shadow(1px 1px 2px black)">
                    </div>

                    <div class="title-column col-lg-6 col-md-6 col-sm-6 wow fadeInRight  py-5" data-wow-delay="600ms">
                        <div class="inner-column" style="padding: 0px 0 0px;">
                            <div class="sec-title">
                                <h2 class="font-design1">
                                    Our Milestone,
                                    <br> Image and capability
                                </h2>

                                <div class="text text-black" style="font-size: 18px;">
                                    In current age, businesses in many parts of the world are
                                    undergoing reforms to develop, Golden Sea Myanmar Co.,
                                    Ltd founded in 2004, has a successful reputation in this field
                                    with over 19 years of experience.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="team-section" style="padding: 20px 0 80px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Legal Documents
                </span>
                <h2 style="font-size: 46px;">
                    Our update licenses,
                    <br>
                    <span class="color3">
                        Approved by Ministry of Labour
                    </span>
                </h2>
            </div>

            <div class="row d-flex justify-content-around">

                <div class="team-block col-lg-5 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        <img src="{{ asset('data/1.png') }}" alt=""
                            style="width: 100%; height: 630px; background-size: cover; object-position: center; object-fit: cover;">
                        <a href="javascript::void(0)" class="theme-btn btn-style-four" style="width: 100%;">
                            Overseas Employment Agency Licence
                        </a>
                    </div>
                </div>


                <div class="team-block col-lg-5 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 10px;">
                        <img src="{{ asset('data/2.png') }}" alt=""
                            style="width: 100%; height: 630px; background-size: cover; object-position: center; object-fit: cover;">
                        <a href="javascript::void(0)" class="theme-btn btn-style-four" style="width: 100%;">
                            Overseas Employment Agency Licence for Thailand
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="why-choose-us-two">
        <div class="bg bg-pattern-5"></div>

        <div class="auto-container">
            <div class="row g-0">
                <!-- Title Column -->
                <div class="title-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title light">
                            <h2 style="font-family:monospace;">Our Vision, Mission & <br>Values</h2>
                        </div>
                        <img src="{{ asset('assets/data/v1.png') }}">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-xl-8 col-lg-12 col-ms-12 col-sm-12">
                    <div class="row g-0">
                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <i class="icon flaticon-interview"></i>
                                <i class="bg-icon flaticon-interview"></i>
                                <h6 class="title"><a href="">Vision</a></h6>
                                <div class="text">
                                    To be the global leader in connecting talent with international opportunities, fostering
                                    a world where every individual can achieve their global career aspirations.
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <i class="icon flaticon-low-cost"></i>
                                <i class="bg-icon flaticon-low-cost"></i>
                                <h6 class="title"><a href="">Mission</a></h6>
                                <div class="text">
                                    Our mission is to empower job seekers and employers to thrive in a diverse global
                                    workforce.
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <i class="icon flaticon-loyalty"></i>
                                <i class="bg-icon flaticon-loyalty"></i>
                                <h6 class="title"><a href="">Values</a></h6>
                                <div class="text">
                                    <ul>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Excellence</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Integrity</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Collaboration:</li>
                                        <li><span class="fa fa-check" style="color:orange;"></span> Responsibility</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Features Block Three -->
                        <div class="feature-block-three col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner-box">
                                <i class="icon flaticon-online-support"></i>
                                <i class="bg-icon flaticon-online-support"></i>
                                <h6 class="title"><a href="">Join Us on Your Journey</a></h6>
                                <div class="text">Contact us today to discover how we can make your international
                                    employment aspirations a reality. Together, we'll build a brighter future, one
                                    connection at a time.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <section class="fun-fact-section">
        <div class="fact-counter">
            <div class="bg bg-pattern-1"></div>
            <div class="auto-container">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="20">0</span></div>
                                <h6 class="counter-title">Experiences</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="55000">0</span></div>
                                <h6 class="counter-title">Happy Candidates</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="20">0</span></div>
                                <h6 class="counter-title">Team Members</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <div class="content">
                                <i class="icon far fa-plus"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="150">0</span></div>
                                <h6 class="counter-title">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-section pull-up">
        <div class="bg bg-pattern-9"></div>
        <div class="auto-container">
            <div class="row">

                <div class="title-column col-lg-6 col-md-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">countries you can visit</span>
                            <h2>Countries we support <br>for the <span class="color3">candidates</span></h2>
                            <div class="text">We guide you to the right path .</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-one">Explore More</a>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="row">

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/1.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    Thailand
                                </h6>
                            </div>
                        </div>

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/2.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    Malaysia
                                </h6>
                            </div>
                        </div>

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/3.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    Japan
                                </h6>
                            </div>
                        </div>

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/4.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    Singapore
                                </h6>
                            </div>
                        </div>

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/5.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    UAE
                                </h6>
                            </div>
                        </div>

                        <div class="country-block-two col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="flag">
                                    <img src="{{ asset('assets/data/6.png') }}" alt="">
                                </div>
                                <h6 class="title">
                                    Kuwait
                                </h6>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <div class="left-shape"><img src="{{ asset('assets/images/resource/plane.png') }}" alt=""></div>
        <div class="right-shape" style="background-image: url({{ asset('assets/data/process.gif') }})"></div>
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-6">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h4>Interested in finding out <br>how GSM can support you?</h4>
                        </div>
                        <ul class="list-style-two two-column">
                            <li><i class="fa fa-check-circle"></i> Fulfilled over 12,000 recruitment projects</li>
                            <li><i class="fa fa-check-circle"></i> Worked with over 2000+ global clients</li>
                            <li><i class="fa fa-check-circle"></i> Developed a Presence in 25+ countries</li>
                        </ul>
                        <a href="#" class="theme-btn btn-style-four"><span class="btn-title">Book
                                Consultation</span></a>
                        <figure class="badge"><img src="images/resource/badge.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section-two pull-down">
        <div class="bg" style="bottom: 0px;"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="sub-title">Media Gallery</span>
                <h2>Our Sending <br> Candidates <span class="color3">Activities</span></h2>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/de1.jpg') }}"
                                        alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/de2.jpg') }}"
                                        alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/de3.jpg') }}"
                                        alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/de4.jpg') }}"
                                        alt=""></a></figure>
                            <i class="icon fa fa-plane"></i>
                        </div>
                        <div class="lower-content">
                            <h6 class="title"><a href="">Sending Candidates</a></h6>
                            <div class="text">Departure</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
