@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/contactus-banner.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>Contact Us</span></h1>
                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>
                            You can forward your messages to Atayılmaz Web Solutions from the link below.
                            At Atayilmaz Software Solutions, we specialize in creating custom websites for businesses like yours.
                            Our team of experienced developers and designers work closely with you to create a website that meets your unique needs and
                            reflects your brand's identity.
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
