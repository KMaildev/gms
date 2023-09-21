@extends('layouts.app')
@section('content')
    <br>
    <section class="why-choose-us pt-0 py-5">
        <div class="bg bg-pattern-1"></div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">countries you can apply</span>
                <h2>Few reasons to choose <br>our <span class="color3">company</span></h2>
            </div>

            <div class="row">
                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <i class="icon flaticon-interview" style="background-color:orange:"></i>
                        <span class="cat">GSM</span>
                        <h6 class="title"><a href="">Direct Interviews</a></h6>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-low-cost"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Cost Effective</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-loyalty"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Trusted Customers</a></h6>
                        </div>
                    </div>
                </div>

                <!-- Features Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="content">
                            <i class="icon flaticon-online-support"></i>
                            <span class="cat">GSM</span>
                            <h6 class="title"><a href="">Support Team</a></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-text"> RIGHT PEOPLE AT THE RIGHT PLACE IN THE RIGHT TIME <a href="#"
                    class="theme-btn btn-style-two">License Certificate</a></div>
        </div>
    </section>


    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">about the company</span>

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
                            <a href="" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
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
    {{-- <section class="features-section-two">
        <div class="auto-container">
            <div class="outer-box">
                <span class="icon-plane"></span>
                <div class="row">

                    <div class="title-column col-lg-6">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <span class="sub-title">check our faqs</span>
                                <h2>Looking for best <br>study visa <span class="color3">country</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="features-column col-lg-3">
                        <div class="inner-column">
                            <ul class="list-style-two">
                                <li>
                                    <i class="fa fa-check-circle"></i> Visas
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i> Study Visa
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i> Country Citizenship
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i> Permanent Residence
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 py-5" style="background-color: white;">
                        <img src="{{ asset('assets/data/process.gif') }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
								<div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span></div>
								<h6 class="counter-title">Experiences</h6>
							</div>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
						<div class="inner">
							<div class="content">
								<i class="icon far fa-plus"></i>
								<div class="count-box"><span class="count-text" data-speed="3000" data-stop="55000">0</span></div>
								<h6 class="counter-title">Happy Candidates</h6>
							</div>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
						<div class="inner">
							<div class="content">
								<i class="icon far fa-plus"></i>
								<div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span></div>
								<h6 class="counter-title">Team Members</h6>
							</div>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
						<div class="inner">
							<div class="content">
								<i class="icon far fa-plus"></i>
								<div class="count-box"><span class="count-text" data-speed="3000" data-stop="150">0</span></div>
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
		<div class="left-shape"><img src="{{asset('assets/images/resource/plane.png')}}" alt=""></div>
		<div class="right-shape" style="background-image: url({{asset('assets/data/process.gif')}})" ></div>
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
						<a href="#" class="theme-btn btn-style-four"><span class="btn-title">Book Consultation</span></a>
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
				<h2 >Our Sending <br> Candidates <span class="color3">Activities</span></h2>
			</div>

			<div class="row">
				<!-- Service Block -->
				<div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href=""><img src="{{asset('assets/data/de1.jpg')}}" alt=""></a></figure>
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
							<figure class="image"><a href=""><img src="{{asset('assets/data/de2.jpg')}}" alt=""></a></figure>
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
							<figure class="image"><a href=""><img src="{{asset('assets/data/de3.jpg')}}" alt=""></a></figure>
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
							<figure class="image"><a href=""><img src="{{asset('assets/data/de4.jpg')}}" alt=""></a></figure>
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
