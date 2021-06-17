<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
        <link rel="icon" href="{{ asset('img/title-icon.png') }}" type="image/png" sizes="16x16">
    
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
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo-gyd.png') }}" width="100" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    {{-- <li><a href="#faq" class="page-scroll">FAQ</a></li> --}}
                    {{-- <li><a href="#proposal" class="page-scroll">Proposal Kegiatan</a></li> --}}
                    <li><a href="#pilih-hewan" class="page-scroll">Pilih Hewan Qurban</a></li>
                    <li><a href="#konfirmasi-qurban" class="page-scroll">Konfirmasi Qurban</a></li>
                    <li><a href="{{ url('galeri') }}" class="page-scroll">Galeri Qurban</a></li>
                    {{-- <li><a href="#tips-ramadhan" class="page-scroll">Galeri Qurban</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->


<!--body content wrap start-->
<div class="main">
    @yield('main')
</div>
<!--body content wrap end-->

<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="footer-nav-wrap text-white mb-0 mb-md-4 mb-lg-0 text-center">
                        <a class="d-block" target="_blank" href="https://griyayatim.com"><img src="{{ asset('img/logo-gyd.png') }}" alt="footer logo" width="210" class="img-fluid mb-1"></a>
                        <p>
                            SK. Kemenag No. 287 Tahun 2018
                        </p>
                        <p>
                            Virgin Island NA-7 De-Latinos BSD City Rawabuntu Serpong – Tangerang Selatan <br> 15318</a>
                        </p>
                        <p>
                            Telp : 0896 0609 0609
                            <br>Email : info@griyayatim.com
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-nav-wrap text-white text-center">
                        <h5 class="text-white">Menu Pilihan</h5>
                        <ul class="list-unstyled footer-nav-list mt-3">
                            <li><a href="https://griyayatim.com/kalkulatorzakat/" target="_blank" class="text-foot "><span class="ti-angle-double-right"></span> Kalkulator Zakat</a></li>
                            <li><a href="https://griyayatim.com/lokasi-asrama/" target="_blank" class="text-foot"><span class="ti-angle-double-right"></span> Panti Asuhan Terdekat</a></li>
                            <li><a href="https://kitabisa.com/orang-baik/08bbe0ee2108cf456581b0a283ea4c37" target="_blank" class="text-foot"><span class="ti-angle-double-right"></span> Donasi Online Kitabisa</a></li>
                            <li><a href="https://griyayatim.com/nomor-rekening/" target="_blank" class="text-foot"><span class="ti-angle-double-right"></span> Rekening Donasi & Scan QR Code</a></li>
                            <li><a href="https://griyayatim.com/nomor-rekening/" target="_blank" class="text-foot"><span class="ti-angle-double-right"></span> Konfirmasi Donasi</a></li>
                            <li><a href="https://griyayatim.com/laporan-keuangan/" target="_blank" class="text-foot"><span class="ti-angle-double-right"></span> Laporan Keuangan</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-nav-wrap text-white text-center">
                        <h5 class="text-light footer-head">Ayo Berdonasi Sekarang !!!</h5>
                        <p>Bagikan banyak keceriaan untuk anak-anak yatim dan dhuafa di seluruh Indonesia...</p>
                        <a href="https://donasiberkah.id" target="_blank" class="btn solid-white-btn page-scroll"> Tebarkan Kebaikan</a> 
                    </div>
                    <ul class="list-unstyled social-list mb-0 text-center mt-4">
                        <li class="list-inline-item blog-footer"><a href="https://facebook.com/yayasangriyayatimdhuafa" target="_blank" class="rounded"><span class="ti-facebook white-bg color-2 shadow rounded-circle"></span></a></li>
                        <li class="list-inline-item blog-footer"><a href="https://instagram.com/griyayatim" target="_blank" class="rounded"><span class="ti-instagram white-bg color-2 shadow rounded-circle"></span></a></li>
                        <li class="list-inline-item blog-footer"><a href="https://youtube.com/griyayatimdhuafa" target="_blank" class="rounded"><span class="ti-youtube white-bg color-2 shadow rounded-circle"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->
    <div class="secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center text-white mb-5">
                        Griya Yatim & Dhuafa | Copyright © 2021 
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
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

@stack('scripts')
</body>
</html>