@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/our-services-banner.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>{{__('pages.services.hero.title')}}</span></h1>
                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>{{__('pages.services.hero.description')}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    SERVICES   --}}
    <div class="section sec-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="heading">{{__('pages.services.main.title')}}</h2>
                </div>
                <div class="col-lg-4">
                    <p>
                        {{__('components.gallery.description')}}
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project One</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project Two</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project One</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project One</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project Two</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-portfolio">
                        <a href="project-single.html">
                            <img src="{{asset('storefront')}}/images/build-website.png" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Project One</h3>
                                <div class="cat">Construction</div>
                            </div>
                        </a>
                    </div>
                </div>

                {{--            <div class="col-md-12 text-center mt-5">--}}
                {{--                <p><a href="#" class="btn btn-primary me-4">See all projects</a></p>--}}
                {{--            </div>--}}

            </div>
        </div>
    </div>
    @include('storefront.components.accordion-menu')
    @include('storefront.components.advertisement-video')
@endsection
@section('footer')
    @include('storefront.common.footer')
@endsection
