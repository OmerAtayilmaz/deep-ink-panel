<div class="sec-3 section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="heading">{{__('components.accordion.title')}}</h2>
                <p>
                   {{__('components.accordion.description')}}
                </p>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="accordion accordion-flush accordion-1" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                               {{__('components.accordion.item1.header')}}
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{asset('storefront')}}/images/ecommerce.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{__('components.accordion.item1.text')}} </p>
                                        <a href="#" class="more-2">{{__('common.button.learn-more')}} <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                {{__('components.accordion.item2.header')}}
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{asset('storefront')}}/images/webdevelopment.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{__('components.accordion.item2.text')}} </p>
                                        <a href="#" class="more-2">{{__('common.button.learn-more')}} <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                {{__('components.accordion.item3.header')}}
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{asset('storefront')}}/images/webseo.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{__('components.accordion.item3.text')}} </p>
                                        <a href="#" class="more-2">{{__('common.button.learn-more')}} <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                {{__('components.accordion.item4.header')}}
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row justify-content-between">
                                    <div class="col-md-4">
                                        <img src="{{asset('storefront')}}/images/www.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{__('components.accordion.item4.text')}} </p>
                                        <a href="#" class="more-2">{{__('common.button.learn-more')}} <span class="icon-arrow_forward"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
