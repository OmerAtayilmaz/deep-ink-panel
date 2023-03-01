@extends('layout.main')
@section('header')
    @include('storefront.common.navbar')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url('{{asset('storefront')}}/images/about-banner.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>About Us</span></h1>


                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-1">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-3">
                    <h2 class="heading">Who are we?</h2>
                    <p>At Atayilmaz Software Solutions, we specialize in creating custom websites for businesses like yours.
                        Our team of experienced developers and designers work closely with you to create a website that meets your unique needs and
                        reflects your brand's identity.
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
                    <h2 class="heading">What we do?</h2>
                    <p>
                        With our comprehensive web design and SEO services, you can rest assured that your business is well-represented online
                        and that you are reaching your target audience effectively. Contact us today to learn more about how we can help you build a
                        strong and effective online presence.
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
