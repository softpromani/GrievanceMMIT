@extends('home.includes.master')
@section('title', 'About-UPASHSA')
@section('content')

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <!-- Page Title -->
                <h1>About UPASHSA</h1>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<!--===============================
=            Our Story            =
================================-->
<section class="section about p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="content text-center text-lg-left">
                    <!-- Headline -->
                    <h2>This is our story.</h2>
                    <!-- Story -->
                    <p>We’re here for those who refuse to settle. Who never stop moving forwards...</p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <!-- Story Image Slider -->
                <div class="about-slider">
                    <!-- Story Image -->
                    <div class="item">
                        <img class="w-100" src="{{ asset('home/images/about/story-slider-01.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item">
                        <img class="w-100" src="{{ asset('home/images/about/story-slider-01.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item">
                        <img class="w-100" src="{{ asset('home/images/about/story-slider-01.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Our Story  ====-->

<!--================================
=            Behind Story          =
=================================-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-0">
                    <h2>Why we created <a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a></h2>
                    <p>Nulla quis lorem ut libero malesuada feugiat...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Behind Story  ====-->

<!--==================================
=            Create Story            =
===================================-->
<section class="section create-stories pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="block">
                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('home/images/blog/post-01.jpg') }}" alt="Story-Image">
                    <!-- Heading -->
                    <h3>Our Story</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="block">
                    <!-- Image -->
                    <img class="img-fluid" src="{{ asset('home/images/blog/post-03.jpg') }}" alt="Story-Image">
                    <!-- Heading -->
                    <h3>What we do</h3>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Create Story  ====-->

<!--=====================================
=            Quotes Slider              =
======================================-->
<section class="section quotes pt-0">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto text-center">
                <div class="quote-slider">
                    <div class="item mb-4">
                        <h2>Behind every great product, there is a great mind.</h2>
                        <cite class="ml-0">-TechCrunch</cite>
                    </div>
                    <div class="item mb-4">
                        <h2>Behind every great product, there is a great mind.</h2>
                        <cite class="ml-0">-TechCrunch</cite>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Quotes Slider  ====-->

<!--=====================================
=            Client Slider              =
======================================-->
<section class="section clients bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto text-center">
                <h3>Featured In</h3>
                <div class="client-slider">
                    <div class="item mb-4">
                        <img class="m-auto" src="{{ asset('home/images/clients/business-finder.png') }}" alt="business-finder">
                    </div>
                    <div class="item mb-4">
                        <img class="m-auto" src="{{ asset('home/images/clients/forbes.png') }}" alt="forbes">
                    </div>
                    <div class="item mb-4">
                        <img class="m-auto" src="{{ asset('home/images/clients/venture-beat.png') }}" alt="venture-beat">
                    </div>
                    <div class="item mb-4">
                        <img class="m-auto" src="{{ asset('home/images/clients/tech-crunch-new.png') }}" alt="TechCrunch">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Client Slider  ====-->

<!--==============================
=            Investors           =
===============================-->
<section class="section investors">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Our Angel Investors</h2>
                    <p>Nulla quis lorem ut libero malesuada feugiat...</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="block text-center">
                    <div class="image shadow hover-zoom">
                        <img class="img-fluid" src="{{ asset('home/images/team/marketing-team-01.jpg') }}" alt="investor">
                    </div>
                    <h3>Spider Web</h3>
                    <p>Investor</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Our Story            =
================================-->
<section class="section about pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="content text-center text-lg-left">
                    <h2>This is our story.</h2>
                    <p>We’re here for those who refuse to settle...</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="about-slider">
                    <div class="item">
                        <img class="w-100" src="{{ asset('home/images/about/story-slider-01.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================
=            Section comment            =
======================================-->
<section class="section cta-hire bg-gary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>We are hunting Genius Developers</h2>
                <p>Sed porttitor lectus nibh...</p>
                <a href="{{ asset('home/contact.html') }}" class="mt-3 btn btn-main-md">Join the team</a>
            </div>
        </div>
    </div>
</section>

@endsection
