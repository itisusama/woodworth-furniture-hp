<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.head')
    @yield('custom-css')
<body>
    @include('frontend.partials.navbar')
    @yield('website-content')
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
    @yield('custom-js')
</body>
</html>
