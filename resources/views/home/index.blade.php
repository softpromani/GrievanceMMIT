@extends('home.includes.master')
@section('title', 'Home')
@section('header-area')
    <style>
        .section-title {
            margin-bottom: 2rem;
        }

        .mentors {
            margin: 1rem 0;
            padding: 1rem;
        }

        .mentors .image {
            margin-bottom: 0.8rem;
        }

        .mentors .name {
            font-weight: 800 !important;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .mentors .designation {
            font-size: 0.9rem !important;
            color: #555;
            line-height: normal;
        }

        .block {
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        .tab {
            font-family: 'Montserrat', sans-serif;
            padding: 0;
            margin: 0;
        }

        .tab .nav-tabs {
            margin: 0;
            border: none;
            position: relative;
        }

        .tab .nav-tabs li a {
            color: #fff;
            background-color: #222;
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-align: center;
            text-transform: capitalize;
            padding: 11px 18px;
            margin: 0 0 1px 0;
            border-radius: 0;
            border: none;
            display: block;
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .tab .nav-tabs li.active a,
        .tab .nav-tabs li a:hover,
        .tab .nav-tabs li.active a:hover {
            color: #fff;
            background-color: #03245e;
            border: none;
        }

        .tab .nav-tabs li a:before,
        .tab .nav-tabs li a:after {
            content: "";
            background: #fa8231;
            height: 100%;
            width: 100%;
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            z-index: -1;
            transition: all 0.5s ease 0s;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }

        .tab .nav-tabs li a:after {
            background: #f7b731;
        }

        .tab .nav-tabs li.active a:before,
        .tab .nav-tabs li a:hover:before {
            opacity: 1;
            clip-path: polygon(0 0, 100% 0, 5% 10%, 0% 100%);
        }

        .tab .nav-tabs li.active a:after,
        .tab .nav-tabs li a:hover:after {
            opacity: 1;
            clip-path: polygon(95% 90%, 100% 0, 100% 100%, 0% 100%);
        }

        .tab .tab-content {
            color: #444;
            background: #fff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
            line-height: 25px;
            padding: 20px 25px;
            border: 2px solid #222;
        }

        @media only screen and (max-width: 479px) {
            .tab .nav-tabs li {
                width: 100%;
                text-align: center;
            }
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .serviceBox {
            color: #03245e;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin: 0 10px;
            position: relative;
            z-index: 1;
        }

        .serviceBox:before {
            content: '';
            background: linear-gradient(to bottom, #fff 89%, #03245e 0%);
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            bottom: 25px;
            z-index: -1;
        }

        .serviceBox .title {
            color: #fff;
            background: #03245e;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 15px 10px;
            margin: 0 -10px 15px;
            border-radius: 20px 20px 0 0;
            position: relative;
        }

        .serviceBox .title:before,
        .serviceBox .title:after {
            content: "";
            background: linear-gradient(to top right, transparent 49%, #03245e 50%);
            width: 10px;
            height: 10px;
            opacity: 0.5;
            position: absolute;
            bottom: -10px;
            left: 0;
        }

        .serviceBox .title:after {
            transform: rotateY(180deg);
            left: auto;
            right: 0;
        }

        .serviceBox .description {
            color: #555;
            font-size: 13px;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 24px;
            margin: 0 15px 15px;
        }

        .serviceBox .service-icon {
            background: #fff;
            font-size: 45px;
            line-height: 85px;
            width: 85px;
            height: 85px;
            margin: 0 auto;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .serviceBox .service-icon i {
            line-height: inherit
        }

        @media only screen and (max-width: 1199px) {
            .serviceBox {
                margin: 0 10px 30px;
            }
        }
    </style>
@endsection
@section('content')

    <!--====================================
    =            Hero Section            =
    =====================================-->
    <section class="section gradient-banner">
        <div class="shapes-container">
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                    <h3 class="text-white font-weight-bold mb-4">WELCOME TO OFFICIAL WEBSITE OF <br /> UTTAR PRADESH
                        TECHNICAL EDUCATION APPLIED SCIENCES
                        AND HUMANITIES SERVICE ASSOCIATION </h3>
                    <p class="text-white mb-5">(UPASHSA: EST—1989)</p>
                    <a href="{{ route('signUp') }}" class="btn btn-main-md">Register as a Member</a>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <img class="img-fluid"
                        src="{{ asset('home/images/complaint-managment-system-intellicon-intelligent-contact-center.png') }}"
                        alt="screenshot">
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Hero Section  ====-->

    <section class="section pt-0 position-relative pull-top">
        <div class="container">
            <div class="rounded shadow p-5 bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <h3 class="mt-4 text-capitalize h5 ">Internal Meetings of Association:</h3>
                        <ul class="text-left ">
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Minutes of Meeting</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <h3 class="mt-4 text-capitalize h5 ">Internal Meetings of Association:</h3>
                        <ul class="text-left">
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Minutes of Meeting</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <h3 class="mt-4 text-capitalize h5 ">Internal Meetings of Association:</h3>
                        <ul class="text-left">
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Minutes of Meeting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 ml-auto">
                        <a class="btn btn-main-ms text-left" href="#">View more meetings</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==================================
    =            Notice and Important Formats Grid  =
    ===================================-->
    <section class="feature section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-8">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Information Bulletin</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade show active" id="Section1">
                                <ul>
                                    <li>Demo Notice</li>
                                    <li>Demo Notice</li>
                                    <li>Demo Notice</li>
                                    <li>Demo Notice</li>
                                </ul>
                                <div class="text-end mt-5 text-right">
                                    <a href="#" class="btn btn-main-ms">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox blue">
                        <h3 class="title ">Important Formats</h3>
                        <ul class="text-left" style="list-style: none;">
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> NOC</a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Earned Leave</a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Medical Leave</a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Maternity Leave </a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Child Care Leave </a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Degree Addition </a></li>
                            <li><i class="fa fa-hand-o-right"></i><a href="#"> Medical Reimbursement </a></li>
                        </ul>
                        <div class="service-icon">
                            <span><i class="fa fa-briefcase"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    =            Investors           =
    ===============================-->
    <section class="section investors">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Section Title -->
                <div class="col-12 text-center mb-5">
                    <div class="section-title">
                        <h2>Our Mentors</h2>
                    </div>
                </div>

                <!-- Mentor Profile 1 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="block text-center mentors">
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('home/images/team/Yo-300x300.jpg') }}"
                                alt="Shri Yogi Adityanath">
                        </div>
                        <p class="name font-weight-bold">Shri Yogi Adityanath</p>
                        <p class="designation text-muted">Hon'ble Chief Minister, UP</p>
                    </div>
                </div>

                <!-- Mentor Profile 2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="block text-center mentors">
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('home/images/team/download-1-300x300.jpg') }}"
                                alt="Shri Ashish Patel">
                        </div>
                        <p class="name font-weight-bold">Shri Ashish Patel</p>
                        <p class="designation text-muted">Hon'ble Minister for Technical Education, U.P.</p>
                    </div>
                </div>

                <!-- Mentor Profile 3 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="block text-center mentors">
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('home/images/team/alok-kumar.jpg') }}"
                                alt="Sri Alok Kumar">
                        </div>
                        <p class="name font-weight-bold">Sri Alok Kumar (IAS)</p>
                        <p class="designation text-muted">Principal Secretary <br />Technical Education, UP</p>
                    </div>
                </div>

                <!-- Mentor Profile 4 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="block text-center mentors">
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('home/images/team/Director-TE-1.jpg') }}"
                                alt="Sri Avinash Krishna Singh">
                        </div>
                        <p class="name font-weight-bold">Sri Avinash Krishna Singh (IAS)</p>
                        <p class="designation text-muted">Director General <br /> Technical Education</p>
                    </div>
                </div>

                <!-- Mentor Profile 5 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="block text-center mentors">
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('home/images/team/director-2024.jpeg') }}"
                                alt="Shri Annavi Dinesh Kumar">
                        </div>
                        <p class="name font-weight-bold">Shri Annavi Dinesh Kumar</p>
                        <p class="designation text-muted">Director <br /> Technical Education</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>Increase your productivity with <a
                                href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                                Apps</a></h2>
                        <!-- Feature Description -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex
                            ea commodo consequat.</p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "InVision is a window into everything that's being designed at Twitter. It gets all of our best
                            work in one
                            place."
                        </p>
                        <ul class="list-inline meta">
                            <li class="list-inline-item">
                                <img src="{{ asset('home/images/testimonial/feature-testimonial-thumb.jpg') }}"
                                    alt="">
                            </li>
                            <li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mr-auto justify-content-center">
                    <!-- Feature mockup -->
                    <div class="image-content" data-aos="fade-left">
                        <img class="img-fluid" src="{{ asset('home/images/feature/feature-new-02.jpg') }}"
                            alt="ipad">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Feature Grid  ====-->

    <!--==============================
    =            Services            =
    ===============================-->
    <section class="service section bg-gray">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>An Interface For Lifestyle</h2>
                        <p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small
                                Apps</a> makes
                            it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 align-self-center">
                    <!-- Feature Image -->
                    <div class="service-thumb left" data-aos="fade-right">
                        <img class="img-fluid" src="{{ asset('home/images/feature/iphone-ipad.jpg') }}"
                            alt="iphone-ipad">
                    </div>
                </div>
                <div class="col-lg-5 mr-auto align-self-center">
                    <div class="service-box">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-bookmark"></i>
                                    <!-- Heading -->
                                    <h3>Easy Prototyping</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-pulse"></i>
                                    <!-- Heading -->
                                    <h3>Sensor Bridge</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-bar-chart"></i>
                                    <!-- Heading -->
                                    <h3>Strategist</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <!-- Service 01 -->
                                <div class="service-item">
                                    <!-- Icon -->
                                    <i class="ti-panel"></i>
                                    <!-- Heading -->
                                    <h3>Art Direction</h3>
                                    <!-- Description -->
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet
                                        quam id dui</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Services  ====-->


    <!--=====================================
    =            Client Slider              =
    ======================================-->
    <section class="section clients bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto text-center">
                    <h3>Training Institutes</h3>
                    <div class="client-slider">
                        <div class="item mb-4">
                            <img class="m-auto" src="{{ asset('home/images/institute/nittr.png') }}"
                                alt="NITTTR">
                        </div>
                        <div class="item mb-4">
                            <img class="m-auto" src="{{ asset('home/images/institute/irdt.jpg') }}" alt="IRDT">
                        </div>
                        <div class="item mb-4">
                            <img class="m-auto" src="{{ asset('home/images/institute/NIELIT-Preview.png') }}"
                                alt="NIELIT">
                        </div>
                        <div class="item mb-4">
                            <img class="m-auto" src="{{ asset('home/images/institute/bteup-logo.jpg') }}"
                                alt="BTEUP">
                        </div>
                        <div class="item mb-4">
                            <img class="m-auto" src="{{ asset('home/images/institute/jeecup.png') }}"
                                alt="JEECUP">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Client Slider  ====-->

    <section class="call-to-action-app section bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Grievance Redressal</h2>
                    <ul class="list-inline mt-3">
                        <li class="list-inline-item">
                            <a href="{{ route('signIn') }}" class="btn btn-rounded-icon">
                                Already a Member
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('signUp') }}" class="btn btn-rounded-icon">
                                Register as a Member
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
