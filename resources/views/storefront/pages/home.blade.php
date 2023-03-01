@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/home_hero.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto">
                    <h1 class="mb-5"><span>Web Solutions</span> <span class="d-block">Web Design</span> <span class="d-block">& E-Commerce Consultant</span></h1>

                    <div class="play-vid">
                        <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="play glightbox">
                            <span class="icon-play"></span>
                        </a>
                    </div>

                    <div class="intro-desc">
                        <div class="line"></div>
                        <p> We provide web &  e-commerce solutions for your business.
                            We are a team of professionals with years of experience in web design,
                            web development, e-commerce, and digital marketing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('storefront.components.secondary')
    @include('storefront.components.accordion-menu')
    @include('storefront.components.gallery')
    @include('storefront.components.carousel')
    @include('storefront.components.card-list')
@endsection
@section('footer')
    @include('storefront.common.footer')
@endsection
