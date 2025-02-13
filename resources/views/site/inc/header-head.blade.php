<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (isset($page->meta_title) || isset($page->title))
        <title>{{ $page->meta_title ?? $page->title }} |
            {{ $page->title ?? 'Foodo' }}</title>
    @else
        <title>@yield('title') | {{ $title ?? 'Foodo' }}</title>
    @endif

    <meta name="google-site-verification" content="H6ST_t7ToqfYJo7j1-MQ-WUhh_8UhR0mjlGP7r-dDnE">
    <meta name="description" content="@yield('seo_description', isset($page->meta_description) ? $page->meta_description : '')">
    <meta name="keywords" content="@yield('meta_keywords', isset($page->meta_keywords) ? $page->meta_keywords : '')">

    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/unicons.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('public/assets/css/plugins/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/assets/css/plugins/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.3/sweetalert2.min.css" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S10HP3W1E3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-S10HP3W1E3');
    </script>
</head>
