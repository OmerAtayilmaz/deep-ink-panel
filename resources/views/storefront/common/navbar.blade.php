<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="{{route('storefront.index')}}" class="logo m-0 float-start">Atayilmaz Web Solutions<span class="text-primary">.</span> </a>
            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
                <li  class="{{ Route::currentRouteName() == 'storefront.index' ? 'active':'' }}" >
                    <a href="{{route('storefront.index')}}">{{__('navigation.navbar.home')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.services' ? 'active':'' }}">
                    <a href="{{route('storefront.services')}}">{{__('navigation.navbar.services')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.projects' ? 'active':'' }}">
                    <a href="{{route('storefront.projects')}}">{{__('navigation.navbar.projects')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.references' ? 'active':'' }}">
                    <a href="{{route('storefront.references')}}">{{__('navigation.navbar.references')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.blog' ? 'active':'' }}">
                    <a href="{{route('storefront.blog')}}">{{__('navigation.navbar.blog')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.about' ? 'active':'' }}">
                    <a href="{{route('storefront.about')}}">{{__('navigation.navbar.about')}}</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.contact' ? 'active':'' }}">
                    <a href="{{route('storefront.contact')}}">{{__('navigation.navbar.contact')}}</a>
                </li>
            </ul>
            <a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
            <ul class="site-menu float-end d-none d-md-block">
                <li><a href="#" class="d-flex align-items-center text-white h2 fw-bold">
                        <span class="icon-phone me-2"></span> <span>+ 90 551 184 15 17</span>
                </a></li>
                @if(app()->getLocale() == 'tr')
                <li><a href="{{route('set-language',['language'=>'en'])}}" class="d-flex align-items-center text-white h2 fw-bold">
                        <i class="fa-sharp fa-solid fa-globe me-2"></i> <span> EN </span>
                </a></li>
                @else
                    <li><a href="{{route('set-language',['language'=>'tr'])}}" class="d-flex align-items-center text-white h2 fw-bold">
                            <i class="fa-sharp fa-solid fa-globe me-2"></i> <span> TR </span>
                        </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

