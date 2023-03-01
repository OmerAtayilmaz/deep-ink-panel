@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/img_6.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>404 NOT FOUND</span></h1>
                    <h6 class="mb-2 text-center"><a href="{{route('storefront.index')}}" class="more-2">BACK TO HOME <span class="icon-arrow_forward"></span></a></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('storefront.common.footer')
@endsection
