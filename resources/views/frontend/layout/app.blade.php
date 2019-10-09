<!DOCTYPE html>
<html class="no-js" lang="en">
    @include('frontend.include.header')
    <body>
        @include('frontend.include.bodyheader')
        @include('frontend.include.breadcrumb')
        @yield('content')
        @include('frontend.include.bodyfooter')
        <div class="scroll-top not-visible">
            <i class="fa fa-angle-up"></i>
        </div>
        @include('frontend.include.footer')
    </body>
</html>