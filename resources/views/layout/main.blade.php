<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('storefront.common.head')
<body class="antialiased">
    @section('header')
    @show
    @section('content')
    @show
    @section('footer')
    @show
    @include('storefront.common.loaders')
    @include('storefront.common.scripts')
</body>
</html>
