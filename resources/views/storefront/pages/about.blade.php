@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/about-banner.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>{{__('pages.about.hero.title')}}</span></h1>


                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>{{__('pages.about.hero.description')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-1">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-3">
                    <h2 class="heading">{{__('pages.about.main.title1')}}</h2>
                    <p>{{__('pages.about.main.description1')}}
                    </p>

                    <p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
                </div>
                <div class="col-lg-7 ms-auto">
                    <img src="{{asset('storefront')}}/images/secondary_first.jpg" alt="Image" class="img-fluid img-r">
                </div>
            </div>
        </div>
    </div>
    <div class="section sec-2">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{asset('storefront')}}/images/secondary_sec.jpg" alt="IMage" class="img-fluid">
                </div>
                <div class="col-lg-3 ms-auto">
                    <h2 class="heading">{{__('pages.about.main.title2')}}</h2>
                    <p>
                        {{__('pages.about.main.description2')}}
                    </p>
                    <p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    @include('storefront.components.accordion-menu')
    @include('storefront.components.card-list')
@endsection
@section('footer')
    @include('storefront.common.footer')
@endsection
