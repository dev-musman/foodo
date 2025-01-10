<!DOCTYPE html>
<html lang="en">
@include('site.inc.header-head')


<body class="home-four">

    @include('site.inc.header')
    @yield('content')
    <!-- footer -->
    @include('site.inc.footer')

    <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/twinmax.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('assets/js/plugins/text-plugins.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/plugins/waypoint.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/vendor/metisMenu.min.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/vendor/hover-revel.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/swip-img.js') }}"></script>
    <!-- main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/css/plugins/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-steps/jquery.steps.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.3/sweetalert2.min.js"></script>
    @stack('scripts')
</body>

</html>
