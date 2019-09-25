<!DOCTYPE html>
<html class="no-js" lang="en">
@include('frontend.include.header')
    <body>
        @include('frontend.include.bodyheader')
            @yield('content')
        @include('frontend.include.bodyfooter')
        @include('frontend.include.footer')
        <div class="scroll-top not-visible">
            <i class="fa fa-angle-up"></i>
        </div>
    </body>
</html>