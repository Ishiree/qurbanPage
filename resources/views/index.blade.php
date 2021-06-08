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

    {{-- Themify-Icon --}}
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
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
                <img src="{{ asset('img/logo-gyd.png') }}" width="100" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="#ibadah-ramadhan" class="page-scroll">FAQ</a></li>
                    <li><a href="#imsakiyah" class="page-scroll">Proposal Kegiatan</a></li>
                    <li><a href="#program-gyd" class="page-scroll">Pilih Hewan Qurban</a></li>
                    <li><a href="#tips-ramadhan" class="page-scroll">Konfirmasi Qurban</a></li>
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

    <!--hero section start-->
    <section class="hero-equal-height ptb-100 gradient-overlay"
             style="background: url('img/hero-bg-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">How We Deliver Digital Experiences</h1>
                        <p class="lead">
                            Our design projects are fresh and simple and will benefit your business greatly. Learn more
                            about our work!
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="video-promo-content mt-4 text-center">
                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon"><span class="ti-control-play"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section new start-->
    <section class="promo-new mt--120">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded py-5 px-4 border-top-0 mt-4 white-bg text-center">
                        <div class="promo-img-wrap mb-4">
                            <img src="img/promo-1.svg" width="80" alt="promo" class="img-fluid"/>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>Domba</h5>
                            <hr>
                            <p>Bobot 26-30Kg</p>
                            <a href="{{ route('domba') }}" class="btn solid-btn animated-btn">{{"Rp. " . number_format($domba->harga, 0, ".", ".") }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded py-5 px-4 border-top-0 mt-4 white-bg text-center">
                        <div class="promo-img-wrap mb-4">
                            <img src="img/promo-2.svg" width="80" alt="promo" class="img-fluid"/>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>Sapi</h5>
                            <hr>
                            <p>Uniquely monetize orthogonal communities via 24/7 benefits. </p>
                            <a href="{{ route('sapi') }}" class="btn solid-btn animated-btn">{{"Rp. " . number_format($sapi->harga, 0, ".", ".") }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="new-single-promo rounded py-5 px-4 border-top-0 mt-4 white-bg text-center">
                        <div class="promo-img-wrap mb-4">
                            <img src="img/promo-1.svg" width="80" alt="promo" class="img-fluid"/>
                        </div>
                        <div class="promo-content-wrap">
                            <h5>1/7 Sapi</h5>
                            <hr>
                            <p>Uniquely monetize orthogonal communities via 24/7 benefits.</p>
                            {{-- <a class="mayar-button iframe-lightbox-link" href="https://gyd-developer.mayar.link/donate/sedekah-untuk-yatim-dan-dhuafa" data-padding-bottom="30%" data-scrolling="true"><span></span>Sedekah Sekarang</a> --}}
                            {{-- <a class="mayar-button iframe-lightbox-link" href="https://gyd-developer.mayar.link/pl/qurban-domba" data-padding-bottom="30%" data-scrolling="true"><span></span>Qurban Sekarang</a> --}}
                            <a href="{{ route('patungan-sapi') }}" class="btn solid-btn animated-btn">{{"Rp. " . number_format($patungan_sapi->harga, 0, ".", ".") }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section new end-->

    <!--details section start-->
    {{-- <section class="ptb-100">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-5 col-lg-5">
                    <div class="z-index text-center">
                        <img alt="iphone" src="img/image-16.png" class="img-fluid"/>
                    </div>
                    <div class="bg-shape d-none d-sm-none d-md-block d-lg-block">
                        <img src="img/shape-image-bg.svg" alt="shape"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="detail-info-wrap">
                        <h2>Qurban Melapangkan Hati</h2>
                        <p>Berkurban menjadi salah satu cara meningkatkan keimanan pada Allah Swt, dimana dengan melapangkan hati mengeluarkan harta untuk berkurban dan membagikan dagingnya kepada mereka yang membutuhkan.</p>
                        <p> Kurban merupakan sebuah kebaikan bagi seorang muslim, dan amal-amal kebaikan yang dikerjakan seseorang akan menjadi salah satu cara bertambahnya iman seseorang.</p>
                        <div class="row mt-5">
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="detail-info-box">
                                    <span class="d-inline-block mb-4 icon-sm text-white p-3 secondary-bg rounded"><i class="ti ti-palette"></i></span>
                                    <div class="detail-info-content">
                                        <h5 class="mb-2">Bentuk Syukur</h5>
                                        <p>Berkurban jadi bentuk syukur hamba pada Allah swt. atas segala kenikmatan yang telah diberikan oleh-Nya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12">
                                <div class="detail-info-box">
                                    <span class="d-inline-block mb-4 icon-sm text-white p-3 secondary-bg rounded"><i class="ti ti-announcement"></i></span>
                                    <div class="detail-info-content">
                                        <h5 class="mb-2">Hati Tentram</h5>
                                        <p>Hati akan menjadi tentram ketika kita mengingat Allah swt. dan menjalankan syariat-Nya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--details section end-->

    <!--how it work start-->
    <section class="work-process-new ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading">
                        <h2>Langkah Berqurban</h2>
                        <p>Berqurban menjadi lebih mudah di Griya Yatim & Dhuafa. Melalui proses yang mudah dan cepat, qurbanmu akan sampai kepada kaum dhuafa yang membutuhkan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-vector icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">1</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Pilih Qurban Terbaikmu !</h5>
                                <p>Kamu cukup memilih jenis hewan untuk diqurbankan, kami akan pilihkan hewan terbaik untukmu</p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">2</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Lakukan Transaksi</h5>
                                <p>Terdapat banyak metode pembayaran yang memudahkan. Jangan lupa untuk konfirmasi pembayarannya ya ... </p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-palette icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">3</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Kami Dokumentasi</h5>
                                <p>Proses penyembelihan qurbanmu akan kami dokumentasikan dan kami laporkan.</p>
                            </div>
                        </div>
                        <div class="single-work-process mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                            <div class="work-process-icon-wrap secondary-bg rounded">
                                <i class="ti-cup icon-md text-white"></i>
                                <span class="process-step color-secondary white-bg shadow-sm">4</span>
                            </div>
                            <span class="work-process-divider"></span>
                            <div class="work-process-content mt-4">
                                <h5>Penyaluran</h5>
                                <p>Qurbanmu akan disalurkan kepada kaum yatim dan dhuafa </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--how it work end-->

   

    <!--feature section tab style start-->
    <section id="how-it-work" class="feature-tab-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-5">
                        <h2>Keutamaan Qurban</h2>
                        {{-- <p>Berqurban merupakan amalan yang sangat istimewa. Akan banyak keistimewaan yang didapatkan oleh orang-orang yang berqurban. </p> --}}
                    </div>
                    <div class="feature-content-wrap">
                        <div class="tab-pane active" id="tab6-1">
                            <div class="row align-items-center justify-content-center pt-5">
                                <div class="col-md-5 col-lg-5">
                                    <div class="new-single-promo rounded p-5 border-color-1 mt-4 text-center">
                                        <div class="tab-content-wrap">
                                            <span class="h1 display-3 color-secondary font-weight-bold mb-3 d-block text-center">01</span>
                                            <h3>Sebagai Wujud Peduli Sesama</h3>
                                            <p>Dengan Qurban yang kamu tunaikan, banyak orang yang mendapatkan manfaatnya. Dengan qurban, tebarkan kebahagiaan untuk yatim dan dhuafa. 
                                                Agar semakin banyak hati yang gembira dan senyuman pun tulus terpancar. Sebagai wujud peduli dengan sesama, qurbanmu menambah kebahagiaan di hari yang penuh bahagia. </p>
                                            <a href="#" class="mt-3 d-flex align-items-center">Learn more about this <span class="ti-angle-right ml-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-1">

                                </div>
                                <div class="col-md-5 col-lg-5">
                                    <div class="new-single-promo rounded p-5 border-color-1 mt-4 text-center">
                                        <div class="tab-content-wrap">
                                            <span class="h1 display-3 color-secondary font-weight-bold mb-3 d-block text-center">02</span>
                                            <h3>Amalan Paling Utama di Idul Adha</h3>
                                            <p>“Tidak ada suatu amalan yang paling dicintai oleh Allah dari Bani Adam ketika hari raya Idul Adha selain menyembelih hewan kurban. Sesungguhnya hewan itu akan datang pada hari kiamat (sebagai saksi) 
                                                dengan tanduk, bulu, dan kukunya. Dan sesungguhnya darah hewan kurban telah terletak di suatu tempat di sisi Allah sebelum mengalir di tanah. Karena itu, 
                                                bahagiakan dirimu dengannya.” (HR. Tirmidzi, Ibnu Majah, dan Hakim)</p>
                                            {{-- <p>Quickly communicate multimedia based materials for enabled channels. Seamlessly disintermediate robust best practices for B2C e-tailers. Efficiently procrastinate prospective experiences.</p> --}}
                                            <a href="#" class="mt-3 d-flex align-items-center">Learn more about this <span class="ti-angle-right ml-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="tab6-1">
                            <div class="row align-items-center justify-content-center pt-5">
                                <div class="col-md-5 col-lg-5">
                                    <div class="new-single-promo rounded p-5 border-color-1 mt-4 text-center">
                                        <div class="tab-content-wrap">
                                            <span class="h1 display-3 color-secondary font-weight-bold mb-3 d-block text-center">03</span>
                                            <h3>1 Bulu Hewan Qurban = 1 Kebaikan</h3>
                                            <p>Rasulullah bersabda : “Sunnah (tuntunan) bapak kalian, Ibrahim. Setiap rambutnya adalah satu kebaikan setiap rambut dari bulunya adalah kebaikan”. (HR. Abu Dawud)</p>
                                            <a href="#" class="mt-3 d-flex align-items-center">Learn more about this <span class="ti-angle-right ml-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-1">

                                </div>
                                <div class="col-md-5 col-lg-5">
                                    <div class="new-single-promo rounded p-5 border-color-1 mt-4 text-center">
                                        <div class="tab-content-wrap">
                                            <span class="h1 display-3 color-secondary font-weight-bold mb-3 d-block text-center">04</span>
                                            <h3>Menyelamatkan dari Bahaya Dunia Akherat</h3>
                                            <p>Ingatlah bahwa kurban itu termasuk amal-amal penyelamat, yang menyelamatkan pemiliknya dari kejelekan dunia dan bahaya di akherat” (Zubdatul wa’idhin).</p>
                                            <a href="#" class="mt-3 d-flex align-items-center">Learn more about this <span class="ti-angle-right ml-2"></span></a>
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
    <!--feature section tab style end-->

    <!--pricing section start-->
    <section id="pricing" class="pricing ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Ayo Berbagi Kepada Kaum Dhuafa dengan Qurban Terbaikmu</h2>
                        <p class="lead">Dengan Qurbanmu, dapatkan banyak keutamaan dan berikan kebahagiaan kepada anak-anak yatim dan dhuafa</p>
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
                                        <div class="pt-4"><h5>Domba</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">Rp.<span class="price font-weight-bolder">{{number_format($domba->harga, 0, ".", ".") }}</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Bobot : 27kg - 30Kg</li>
                                            </ul>
                                            <a href="{{ route('domba') }}" class="btn outline-btn mb-3" target="_blank">Qurban Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card popular-price text-center single-pricing-pack">
                                        <div class="pt-4"><h5>1/7 Sapi</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">Rp.<span class="price font-weight-bolder">{{number_format($patungan_sapi->harga, 0, ".", ".") }}</span></div>

                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                            </ul>
                                            <a href="{{ route('patungan-sapi') }}" class="btn solid-btn mb-3" target="_blank">Qurban Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="pt-4"><h5>Sapi</h5></div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="h1 text-center mb-0">Rp.<span class="price font-weight-bolder">{{number_format($sapi->harga, 0, ".", ".") }}</span></div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                                <li>Push Notifications</li>
                                            </ul>
                                            <a href="{{ route('sapi') }}" class="btn outline-btn mb-3" target="_blank">Qurban Sekarang</a>
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
    <!--screenshots section start-->
    <section id="screenshots" class="screenshots-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Potret Realisasi Qurban</h2>
                        <p>Qurbanmu tahun lalu telah dirasakan oleh anak-anak yatim dan dhuafa, juga masyarakat dhuafa di setiap jejaring Griya Yatim dan Dhuafa dan sekitarnya.</p>
                    </div>
                </div>
            </div>
            <!--start app screen carousel-->
            <div class="screen-slider-content">
                <div class="screenshot-noframe"></div>
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="{{ asset('img/WhatsApp Image 2021-04-28 at 21.56.02 (1).jpeg') }}" class="img-fluid" alt="screenshots"/>
                    <img src="{{ asset('img/WhatsApp Image 2021-05-08 at 14.46.15.jpeg') }}" class="img-fluid" alt="screenshots"/>
                    <img src="{{ asset('img/WhatsApp Image 2021-05-10 at 13.34.32 (1).jpeg') }}" class="img-fluid" alt="screenshots"/>
                    <img src="{{ asset('img/WhatsApp Image 2021-05-10 at 13.37.18.jpeg') }}" class="img-fluid" alt="screenshots"/>
                    <img src="{{ asset('img/WhatsApp Image 2021-05-10 at 13.39.31.jpeg') }}" class="img-fluid" alt="screenshots"/>
                    <img src="{{ asset('img/WhatsApp Image 2021-06-04 at 08.13.45 (1).jpeg') }}" class="img-fluid" alt="screenshots"/>
                </div>
            </div>
            <!--end app screen carousel-->
        </div>
    </section>
    <!--screenshots section end-->

    <!--download section start-->
    <section id="download" class="download-section gradient-overlay" style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover fixed">
        <div class="container">
            <div class="row justify-content-around align-items-end">
                <div class="col-md-12 col-lg-6">
                    <div class="download-txt text-white ptb-100">
                        <h2 class="text-white">
                            Lebih Rinci Lagi Mengenai Program Kami
                        </h2>
                        <p class="lead">
                        Griya Yatim dan Dhuafa memiliki 39 cabang diseluruh Indonesia. Banyak program-program kami yang telah berjalan, dan juga tengah direncanakan.
                        Dalam proposal ini, kami jelaskan secara merinci mengenai program-program dan tujuannya dengan harapan besar Sahabat ikut membersamai kami membahagiakan anak-anak Yatim dan Dhuafa.     
                        </p>
                        <div class="action-btns download-btn mt-4">
                            <a href="#" class="btn solid-white-btn mr-3"> <span class="ti-apple mr-2"></span> Dapatkan Proposal</a>
                            {{-- <a href="#" class="btn outline-white-btn"> <span class="ti-android mr-2"></span> Play Store</a> --}}
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
    {{-- <section id="reviews" class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials what clients say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item mx-3"><img src="img/clients-logo-01.png" width="85" alt="client"
                                                              class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="img/clients-logo-02.png" width="85" alt="client"
                                                              class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="img/clients-logo-03.png" width="85" alt="client"
                                                              class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="img/clients-logo-06.png" width="85" alt="client"
                                                              class="img-fluid"></li>
                            <li class="list-inline-item mx-3"><img src="img/clients-logo-05.png" width="85" alt="client"
                                                              class="img-fluid"></li>
                        </ul>
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
    </section> --}}
    <!--testimonial section end-->
        <!--faq section start-->
        <div id="faq" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>Pertanyaan Seputar Qurban di Griya Yatim & Dhuafa</h2>
                            <p>Berikut pertanyaan-pertanyaan seputar Qurban di Griya Yatim dan Dhuafa. Jika masih ada hal yang belum jelas, Sahabat bisa hubungi kami <a href="http://">disini</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-receipt mr-3"></span> Bagaimana cara berqurban di Griya Yatim & Dhuafa?</h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Sahabat bisa berqurban di Griya Yatim & Dhuafa dengan cara : <br>
                                            1. Membeli hewan qurban secara online. Lengkapnya ikuti <a href="#cara-berdonasi">langkah berikut</a><br>
                                            2. Datang ke salah satu cabang Griya Yatim dan Dhuafa, kemudian berdonasi dengan akad berquban. Berikut <a href="http://">cabang-cabang Griya Yatim & Dhuafa</a><br>
                                            3. Memberikan hewan qurban Sahabat secara fisik ke salah satu <a href="http://">cabang Griya Yatim & Dhuafa</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-gallery mr-3"></span> Kenapa harus Qurban di Griya Yatim & Dhuafa ?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>Dengan Berqurban di Griya Yatim dan Dhuafa, kamu akan mendapatkan 3 keutamaan : <br>
                                            1. Tentunya mendapat pahala melaksanakan qurban <br>
                                            2. Mendapat kebaikan doa anak-anak yatim & dhuafa <br>
                                            3. Ikut membahagiakan anak yatim dan dhuafa
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-wallet mr-3"></span>
                                         Kemana Qurban akan di distribusikan?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Qurban yang kamu tunaikan akan didistribusikan keseluruh jejaring Griya Yatim dan Dhuafa di 13 Provinsi, 
                                            juga anak-anak yatim dan kaum dhuafa disekitarnya.                
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block"><span class="ti-headphone-alt mr-3"></span> 
                                        Bagaimana cara konfirmasi qurban di Griya Yatim dan Dhuafa ?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Mudah untuk mengkonfirmasi qurban Anda. Hubungi kontak kami <a href="">disini</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--faq section end-->
            <!--contact us section start-->
    <section id="contact" class="contact-us-section contact-us ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4></h4>
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
                        <h2>Konfirmasi Qurban Anda </h2>
                        <p class="lead">Anda bisa dengan mudah konfirmasi qurban dengan cara menghubungi kami</p>

                        <a href="#" class="btn outline-btn align-items-center">Konfirmasi <span
                                class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Kontak Kami</h5>
                        <address>
                            Virgin Island NA-7 De-Latinos <br>
                             BSD City Rawabuntu – Serpong – Tangerang Selatan <br>
                              15318
                        </address>
                        <br>
                        <span>Phone: +62895331851413</span> <br>
                        <span>Email: <a href="mailto:iksir@griyayatim.com"
                                        class="link-color">iksir@griyayatim.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

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

{{-- <script type="text/javascript" src="https://mayar.id/mayar-min.js"></script>
<script type="text/javascript" src="https://mayar.id/mayar-min.js"></script> --}}
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