@extends('layouts.app')
@section('main')
<!--hero section start-->
<section class="hero-section ptb-100 gradient-overlay">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-9 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">Galery</h1>
                <div class="custom-breadcrumb">
                    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                        <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                        <li class="list-inline-item breadcrumb-item active">Galery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--hero section end-->
<!--promo section new start-->
<section class="promo-new">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="new-single-promo rounded border-top-0 border-bot-0 mt-4 white-bg text-center">
                    <div class="promo-img-wrap mb-4">
                        <img src="{{ asset('img/WhatsApp Image 2021-04-28 at 21.56.02 (1).jpeg') }}" alt="promo" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="new-single-promo rounded border-top-0 border-bot-0 mt-4 white-bg text-center">
                    <div class="promo-img-wrap mb-4">
                        <img src="{{ asset('img/WhatsApp Image 2021-05-08 at 14.46.15.jpeg') }}" alt="promo" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="new-single-promo rounded border-top-0 border-bot-0 mt-4 white-bg text-center">
                    <div class="promo-img-wrap mb-4">
                        <img src="{{ asset('img/WhatsApp Image 2021-05-10 at 13.34.32 (1).jpeg') }}" alt="promo" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section new end-->


@endsection