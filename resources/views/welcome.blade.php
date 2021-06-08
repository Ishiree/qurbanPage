<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="AppBeats app landing page template or product landing page template helps you easily create websites for your app or product,  landing page template form promotion and many more.">
    <meta name="author" content="ThemeTags">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>Spirit of Qurban</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('template_css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('template_css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('template_css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('template_css/animate.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('template_css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('template_css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('template_css/responsive.css') }}">

</head>
<body>


<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index-2.html">
                <img src="img/logo-white.png" width="160" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="dropdown"><a href="#" class="dropdown-toggle"> Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Page 01</a></li>
                            <li><a href="index-2.html">Home Page 02</a></li>
                            <li><a href="index-3.html">Home Page 03</a></li>
                            <li><a href="index-4.html">Home Page 04</a></li>
                            <li><a href="index-5.html">Home Page 05</a></li>
                            <li><a href="index-6.html">Home Page 06</a></li>
                            <li><a href="index-7.html">Home Page 07 <span class="badge color-1 color-1-bg custom-badge"> New</span></a></li>
                            <li><a href="index-8.html">Home Page 08 <span class="badge color-1 color-1-bg custom-badge"> New</span></a></li>
                            <li><a href="index-9.html">Home Page 09 <span class="badge color-1 color-1-bg custom-badge"> New</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a  href="#" class="dropdown-toggle">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="#">Login & Signup</a>
                                <ul class="sub-menu">
                                    <li><a href="basic-login.html">Login Page 1</a></li>
                                    <li><a href="login.html">Login Page 2</a></li>
                                    <li><a href="basic-sign-up.html">Signup Page 1</a></li>
                                    <li><a href="sign-up.html">Signup Page 2</a></li>
                                    <li><a href="password-reset.html">Reset Password</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Utilities</a>
                                <ul class="sub-menu">
                                    <li><a href="download.html">Download Page</a></li>
                                    <li><a href="review.html">Review Page</a></li>
                                    <li><a href="faq.html">FAQ Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="thank-you.html">Thank You Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Teams  <span class="badge color-1 color-1-bg custom-badge"> New</span></a>
                                <ul class="sub-menu">
                                    <li><a href="team.html">Team Page</a></li>
                                    <li><a href="team-single.html">Team Single Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Our Blog <span class="badge color-1 color-1-bg custom-badge"> New</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-default.html">Blog Default</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Details With Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="partner.html">Our Partner <span class="badge color-1 color-1-bg custom-badge">New</span></a></li>
                            <li><a href="project-details.html">Project Details <span class="badge color-1 color-1-bg custom-badge">New</span></a></li>
                            <li><a href="services-details.html">Services Details <span class="badge color-1 color-1-bg custom-badge">New</span></a></li>

                        </ul>
                    </li>
                    <li><a href="#features" class="page-scroll">Features</a></li>
                    <li><a href="#how-it-work" class="page-scroll">How It Work</a></li>
                    <li><a href="#screenshots" class="page-scroll">Screenshots</a></li>
                    <li><a href="#reviews" class="page-scroll">Reviews</a></li>
                    <li><a href="#pricing" class="page-scroll">Pricing</a></li>
                    <li><a href="#faq" class="page-scroll">FAQ</a></li>
                    <li><a href="#contact" class="page-scroll">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->


<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-equal-height ptb-100 gradient-overlay"
             style="background: url('img/hero-bg-1.jpg')no-repeat top center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="hero-content-left position-relative z-index text-center text-white">
                        <h1 class="text-white">Develop Quality Product with
                            High-performing Teams</h1>
                        <p class="lead">
                            Our design projects are fresh and simple and will benefit your business greatly. Learn more
                            about our work!
                        </p>

                        <div class="subscribe-form-wrapper my-4 m-auto">
                            <form action="#" class="newsletter-form mb-4">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email-id" placeholder="Enter your email" required="">
                                    <div class="input-group-append">
                                        <button class="btn solid-btn subscribe-btn btn-hover" type="submit">
                                            Subscribe <span class="ti-arrow-right align-items-center"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-check mr-2 rounded-circle gray-light-bg color-primary shadow-sm p-1"></span> Free trial 14 days</li>
                                <li class="list-inline-item"><span class="ti-check mr-2 rounded-circle gray-light-bg color-primary shadow-sm p-1"></span> No credit card info</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-bottom">
            <img src="img/curve-shape-top.svg" alt="shape" class="bottom-shape img-fluid">
        </div>
    </section>
    <!--hero section end-->

    <!--promo section new start-->
    <section class="promo-new ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-2">
                        <h2>Join the World’s Fastest Company</h2>
                        <p class="lead">Turn your mobile visitors into your best customers. Efficiently syndicate flexible content via cost effective initiatives completely leverage vertical quality.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded p-5 border-color-1 mt-4">
                        <div class="promo-img-wrap mb-4">
                            <span class="ti-lock icon-lg color-1"></span>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>Safe & Secure</h5>
                            <p>Interactively orchestrate end-to-end applications for parallel.</p>

                            <span class="color-1 color-1-bg rounded py-1 px-2 text-uppercase">Smart</span>
                            <span class="color-2 color-2-bg rounded py-1 px-2 text-uppercase">Flexible</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded p-5 border-color-2 mt-4">
                        <div class="promo-img-wrap mb-4">
                            <span class="ti-credit-card icon-lg color-2"></span>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>Low Fees</h5>
                            <p>Assertively negotiate virtual payment before virtual e-business.</p>

                            <span class="color-5 color-5-bg rounded py-1 px-2 text-uppercase">Smart</span>
                            <span class="color-6 color-6-bg rounded py-1 px-2 text-uppercase">Flexible</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded p-5 border-color-3 mt-4">
                        <div class="promo-img-wrap mb-4">
                            <span class="ti-headphone-alt icon-lg color-3"></span>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>Amazing Support</h5>
                            <p>Monotonectally benchmark fabricate cross-platform strategic.</p>

                            <span class="color-3 color-3-bg rounded py-1 px-2 text-uppercase">Smart</span>
                            <span class="color-4 color-4-bg rounded py-1 px-2 text-uppercase">Flexible</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section new end-->

    <!--feature section start-->
    <section id="features" class="feature-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>App Features</h2>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with that can provide everything you need to generate awareness, drive traffic, connect. Efficiently transform granular value with client-focused content. Energistically redefine market.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-layout icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">Use On Any Device</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-themify-favicon-alt icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">Themify Icon</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-eye icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">Retina Ready</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-thumb-up icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">W3c Valid Code</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-mobile icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">Fully Responsive</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                <span class="ti-world icon-sm p-3 color-2 color-2-bg mr-4 mt-1 rounded-circle float-left"></span>
                                <div class="d-block overflow-hidden">
                                    <h5 class="mb-2">Browser Compatibility</h5>
                                    <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/image-10.png" class="img-fluid mx-auto d-lg-block d-none" alt="app screen"/>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--how it work start-->
    <section id="how-it-work" class="work-process-new ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center">
                        <h2>Our Work Process</h2>
                        <p>Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing through revolutionary</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process text-center mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap color-1-bg rounded">
                                <i class="ti-vector icon-md color-1"></i>
                                <span class="process-step white-bg color-primary shadow-sm">1</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Generate Ideas</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process text-center mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap color-2-bg rounded">
                                <i class="ti-layout-list-thumb icon-md color-2"></i>
                                <span class="process-step white-bg color-primary shadow-sm">2</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Collect Contents</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process text-center mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap color-3-bg rounded">
                                <i class="ti-palette icon-md color-3"></i>
                                <span class="process-step white-bg color-primary shadow-sm">3</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Create Design</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                        <div class="single-work-process text-center mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap color-4-bg rounded">
                                <i class="ti-cup icon-md color-4"></i>
                                <span class="process-step white-bg color-primary shadow-sm">4</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Launch Project</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web services. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work end-->

    <!--screenshots section start-->
    <section id="screenshots" class="screenshots-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Show Our Apps Screenshots</h2>
                        <p>Credibly synthesize multimedia based networks vis-a-vis top-line growth strategies. Continually leverage existing worldwide interfaces </p>
                    </div>
                </div>
            </div>
            <!--start app screen carousel-->
            <div class="screen-slider-content">
                <div class="screenshot-frame"></div>
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="img/01.png" class="img-fluid" alt="screenshots"/>
                    <img src="img/02.png" class="img-fluid" alt="screenshots"/>
                    <img src="img/03.png" class="img-fluid" alt="screenshots"/>
                    <img src="img/04.png" class="img-fluid" alt="screenshots"/>
                    <img src="img/05.png" class="img-fluid" alt="screenshots"/>
                    <img src="img/06.png" class="img-fluid" alt="screenshots"/>
                </div>
            </div>
            <!--end app screen carousel-->

        </div>
    </section>
    <!--screenshots section end-->

    <!--download section start-->
    <section id="download" class="download-section gradient-overlay" style="background: url('img/hero-bg-3.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-around align-items-end">
                <div class="col-md-12 col-lg-6">
                    <div class="download-txt text-white ptb-100">
                        <h2 class="text-white">
                            Download Apps and Increase Revenue
                        </h2>
                        <p class="lead">
                            Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus posuere cubilia curae integer
                            congue leo credibly deliver seamless web-readiness and customer directed platforms. Objectively generate competitive infomediaries through front-end best.
                        </p>
                        <div class="action-btns download-btn mt-4">
                            <a href="#" class="btn solid-white-btn mr-3"> <span class="ti-apple mr-2"></span> App Store</a>
                            <a href="#" class="btn outline-white-btn"> <span class="ti-android mr-2"></span> Play Store</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="d-flex align-items-end">
                        <img src="img/image-11.png" class="img-fluid" alt="download"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--download section end-->

    <!--testimonial section start-->
    <section id="reviews" class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials What Clients Say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="img/client-1.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Austin Cesar</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="img/client-2.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Pirtle Karol</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                        <blockquote>
                            Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                        </blockquote>
                        <div class="client-ratting mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                            </ul>
                            <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                        </div>
                    </div>
                    <div class="client-info-wrap d-flex align-items-center mt-5">
                        <div class="client-img mr-3">
                            <img src="img/client-3.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                        </div>
                        <div class="client-info">
                            <h5 class="mb-0">Aminul Islam</h5>
                            <p class="mb-0">ThemeTags</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--testimonial section end-->

    <!--pricing section start-->
    <section id="pricing" class="pricing ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>How We Compare Our Pricing</h2>
                        <p class="lead">Monotonectally mesh visionary supply chains before plug-and-play interfaces. Globally benchmark worldwide information after clicks-and-mortar channels.</p>
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-tabs feature-tab pricing-tab border-bottom-0" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active h6 d-flex align-items-center" href="#monthly" data-toggle="tab">
                                        Monthly
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h6 d-flex align-items-center" href="#yearly" data-toggle="tab">
                                        Yearly
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane active" id="monthly">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Basic</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">19</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>2 months technical support</li>
                                                <li>2+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card popular-price text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Standard</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span
                                                    class="price font-weight-bolder">49</span></div>

                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>1 Year technical support</li>
                                                <li>50+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Unlimited</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">59</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>2 months technical support</li>
                                                <li>2+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="yearly">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Basic</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">199</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>2 months technical support</li>
                                                <li>2+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card popular-price text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Standard</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span
                                                    class="price font-weight-bolder">549</span></div>

                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>1 Year technical support</li>
                                                <li>50+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Unlimited</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">659</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                                <li>Data Transfer</li>
                                                <li>SQL Database</li>
                                                <li>Search & SEO Analytics</li>
                                                <li>24/7 Phone Support</li>
                                                <li>2 months technical support</li>
                                                <li>2+ profitable keyword</li>
                                            </ul>
                                            <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
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
    <!--pricing section end-->

    <!--client section start-->
    <section class="client-section ptb-100">
        <div class="container">
            <!--clients logo start-->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Trusted by Companies</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="overlay-opacity-gradient"></div>
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="img/clients-logo-01.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-02.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-03.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-04.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-05.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-06.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-07.png" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-08.png" alt="client logo" class="img-fluid client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </section>
    <!--client section start-->

    <!--faq section start-->
    <div id="faq" class="gray-light-bg pt-100">
        <div class="container">
            <div class="row justify-content-around align-items-end">
                <div class="col-md-6 col-lg-6">
                    <div class="faq-content-wrap pb-100">
                        <div class="section-heading mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise with tactical relationships. Phosfluorescently incentivize low-risk high-yield opportunities before sticky synergy. Still have questions? <a href="#contact" class="page-scroll">Contact us</a></p>
                        </div>
                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <a class="card-header collapsed px-4" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-receipt mr-3"></span> Which license do I need?</h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p class="px-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed px-4" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-gallery mr-3"></span> How do I get access to a
                                        theme?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p class="px-4">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed px-4" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-wallet mr-3"></span> How do I see previous orders?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p class="px-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed px-4" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-headphone-alt mr-3"></span> Support related issues for the template?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p class="px-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="d-flex align-items-end">
                        <img class="img-fluid" src="img/app-hand-top.png" alt="download">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq section end-->

    <!--download section start-->
    <section class="gradient-overlay ptb-100" style="background: url('img/hero-bg-1.jpg')no-repeat center center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-white">Download the App For Start Your Investing Journey Now.</h2>
                        <div class="action-btns download-btn mt-4">
                            <a href="#download" class="btn outline-white-btn mr-3 page-scroll"> Download Our App</a>
                            <a href="#contact" class="btn solid-white-btn page-scroll"> Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--download section end-->

    <!--contact us section start-->
    <section id="contact" class="contact-us-section contact-us ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                                               required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" class="form-control" id="phone"
                                               placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="company" value="" size="40" class="form-control"
                                               id="company" placeholder="Your Company">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                              placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            100 Yellow House, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->


</div>
<!--body content wrap end-->

<!--footer section start-->
{{-- <footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="footer-nav-wrap text-white mb-0 mb-md-4 mb-lg-0">
                        <a class="d-block" href="#"><img src="img/logo-white.png" alt="footer logo" width="150" class="img-fluid mb-1"></a>
                        <p>Intrinsicly matrix high standards in niches whereas intermandated niche markets. Objectively harness competitive resources.</p>
                        <ul class="list-unstyled social-list mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><span class="ti-facebook white-bg color-2 shadow rounded-circle"></span></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span class="ti-twitter white-bg color-2 shadow rounded-circle"></span></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span class="ti-linkedin white-bg color-2 shadow rounded-circle"></span></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span class="ti-dribbble white-bg color-2 shadow rounded-circle"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-12">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="text-white">Usefull Links</h5>
                        <ul class="list-unstyled footer-nav-list mt-3">
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Privacy Protection</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Safe Payments</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Terms of Services</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Documentation</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-12">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="text-white">Company</h5>
                        <ul class="list-unstyled footer-nav-list mt-3">
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> About us Section</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Pricing Section</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Features Section</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> FAQ Section</a></li>
                            <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span> Contact Section</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p>Subscribe our newsletter to get our update. We don't send span email to you.</p>
                        <form action="#" class="newsletter-form mt-3">
                            <div class="input-group">
                                <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email" required="">
                                <div class="input-group-append">
                                    <button class="btn solid-btn subscribe-btn btn-hover" type="submit">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-3">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-6 col-lg-5"><p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                    rights reserved by
                    <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer> --}}
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="{{ asset('template_js/jquery-3.4.1.min.js') }}"></script>
<!--Popper js-->
<script src="{{ asset('template_js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ asset('template_js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ asset('template_js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ asset('template_js/jquery.easing.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('template_js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ asset('template_js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ asset('template_js/jquery.countdown.min.js') }}"></script>
<!--validator js-->
<script src="{{ asset('template_js/validator.min.js') }}"></script>
<!--custom js-->
<script src="{{ asset('template_js/scripts.js') }}"></script>
</body>
</html>