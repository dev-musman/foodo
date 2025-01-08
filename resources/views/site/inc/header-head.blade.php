<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (isset($page->meta_title) || isset($page->title))
        <title>{{ $page->meta_title ?? $page->title }} | {{ $page->title ?? 'Foodo' }}</title>
    @else
        <title>@yield('title') | {{ $title ?? 'Foodo' }}</title>
    @endif

    <meta name="description" content="@yield('seo_description', isset($page->meta_description) ? $page->meta_description : '')">

    @if (isset($page->meta_keywords))
        <meta name="keywords" content="{{ $page->meta_keywords }}">
    @endif

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/timepickers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/hover-revel.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
</head>
