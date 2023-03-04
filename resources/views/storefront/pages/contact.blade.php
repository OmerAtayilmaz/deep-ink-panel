@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/contactus-banner.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>{{__('pages.contact.hero.title')}}</span></h1>
                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>
                            {{__('pages.contact.hero.description')}}
                        </p>
                </div>
            </div>
        </div>
    </div>
    @include('storefront.components.form')
@endsection
@section('footer')
    @include('storefront.common.footer')
@endsection
