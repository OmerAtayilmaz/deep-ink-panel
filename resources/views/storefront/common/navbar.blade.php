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
                    <a href="{{route('storefront.index')}}">Home</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.services' ? 'active':'' }}">
                    <a href="{{route('storefront.services')}}">Services</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.projects' ? 'active':'' }}">
                    <a href="{{route('storefront.projects')}}">Projects</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.references' ? 'active':'' }}">
                    <a href="{{route('storefront.references')}}">References</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.blog' ? 'active':'' }}">
                    <a href="{{route('storefront.blog')}}">Blog</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.about' ? 'active':'' }}">
                    <a href="{{route('storefront.about')}}">About Us</a>
                </li>
                <li  class="{{ Route::currentRouteName() == 'storefront.contact' ? 'active':'' }}">
                    <a href="{{route('storefront.contact')}}">Contact Us</a>
                </li>
            </ul>
            <a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
            <ul class="site-menu float-end d-none d-md-block">
                <li><a href="#" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>+ 90 551 184 15 17</span></a></li>
            </ul>
        </div>
    </div>
</nav>
