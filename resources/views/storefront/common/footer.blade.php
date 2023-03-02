<div class="site-footer bg-light">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="line-top">{{__('navigation.footer.navigation')}}</h3>
                    <p class="mb-5">{{__('navigation.footer.description')}}</p>

                </div>
                <div class="widget">
                    <h3 class="line-top">{{__('navigation.footer.social')}}</h3>
                    <ul class="social list-unstyled mb-5">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="widget">
                            <h3 class="line-top text">{{__('navigation.footer.navigation')}}</h3>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{route('storefront.index')}}">{{__('navigation.navbar.home')}}</a></li>
                                <li><a href="{{route('storefront.services')}}">{{__('navigation.navbar.services')}}</a></li>
                                <li><a href="{{route('storefront.projects')}}">{{__('navigation.navbar.projects')}}</a></li>
                                <li><a href="{{route('storefront.references')}}">{{__('navigation.navbar.references')}}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <div class="widget">
                            <ul class="links list-unstyled">
                                <li><a href="{{route('storefront.blog')}}">{{__('navigation.navbar.blog')}}</a></li>
                                <li><a href="{{route('storefront.about')}}">{{__('navigation.navbar.about')}}</a></li>
                                <li><a href="{{route('storefront.contact')}}">{{__('navigation.navbar.contact')}}</a></li>
                                <li><a href="{{route('storefront.faq')}}">{{__('navigation.navbar.faq')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center copyright">
            <div class="col-md-8">
                <p class="small text-black-50">Copyright &copy;<script>document.write(new Date().getFullYear());</script>.
                    {{__('navigation.footer.rights')}} &mdash;  Atayilmaz Web Solutions
                </p>
            </div>
        </div>
    </div>
</div>
