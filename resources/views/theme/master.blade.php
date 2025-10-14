<!DOCTYPE html>
<html lang="en">
@include('theme.partials.head')

<body>
<!--================Header Menu Area =================-->
@include('theme.partials.header')

<!--================Header Menu Area =================-->



    @yield('contact')



<!--================ Start Footer Area =================-->
@include('theme.partials.footer')

<!--================ End Footer Area =================-->

<script src="{{asset('assets')}}/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="{{asset('assets')}}/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/mail-script.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>

