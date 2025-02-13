<!DOCTYPE html>
<html lang="en">
@include('site.inc.header-head')


<body class="home-four">

    @include('site.inc.header')
    @yield('content')
    <!-- footer -->
    @include('site.inc.footer')

    <!-- jquery js -->
    <script src="{{ asset('public/assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('public/assets/js/vendor/jqueryui.js') }}"></script>
    <!-- swiper cdn !-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <!-- metismenu js -->
    <script src="{{ asset('public/assets/js/vendor/metisMenu.min.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('public/assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- main js -->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('public/assets/css/plugins/owlcarousel/dist/owl.carousel.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- <script src="{{ asset('public/assets/js/plugins/jquery-steps/jquery.steps.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.3/sweetalert2.min.js"></script>
    @stack('scripts')
</body>

</html>
