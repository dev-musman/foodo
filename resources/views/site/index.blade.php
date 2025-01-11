@extends('layouts.app')
@section('content')
    <!-- banner start -->
    <div class="rts-banner-main-area-swiper banner-four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-left-image">
                        <span class="w-food-itilanio">Welcome To Foodo</span>
                        <h1 class="p-title"><span style="color: #C73938;">Homemade Khana</span> <span
                                style="font-weight: 300 !important;">Right to Your Office</span></h1>
                        <p class="desc">Make Your Teams Happy with Ghar ka Khana</p>
                        <div class="banner-home-button d-flex">
                            <a href="#" class="order-btn-contact">Contact Us</a>
                            <a href="#" class="order-btn-see-menu">SEE Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-right-image" data-sal="zoom-in" data-sal-delay="600" data-sal-duration="600">
                        <img src="{{ asset('assets/images/banner/home-banner-image.png') }}" alt="banner-right-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <div class="rts-about-area rts-section-gapTopBotm bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="home-about-one-img">
                        <img src="{{ asset('assets/images/about/home-about-image.png') }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 home-about-heading">
                    <div class="">
                        <h2 class="p-title">A Well-Fed Team Is a Happy Team</h2>
                        <p class="desc">Book Delicious & Fresh Lunch Goodness for Your Corporate Teams</p>
                        <h4 class="p-title">Craving Ghar ka Khana at Lunch?</h4>
                        <p>Register your group for an amazing lunchtime</p>
                        <ul>
                            <li>Select your chosen menu</li>
                            <li>Place your order with the team *Minimum order restriction apply</li>
                            <li>Enjoy your food at the designated time</li>
                        </ul>
                        <br>
                        <div class="banner-home-button mt-5">
                            <a href="#" class="order-btn-contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-about-area rts-section-gapTopBotm bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 home-about-heading">
                    <div class="">
                        <h5 class="p-title">The Food You Eat Should Be Perfect,
                            And This Is Our Responsibility</h5>
                        <p class="desc">At Foodo, we are dedicated to providing the best food by sourcing top-quality
                            ingredients from our selected vendors. It helps to ensure freshness with an irresistible taste
                            that savors your hunger.</p>
                        <p class="desc">We consider it our responsibility to provide you with a nutritious meal and the
                            comfort of “Ghar ka Khana”. By ensuring all the basic requirements, we make the food easily
                            affordable within your set budget.</p>
                        <br>
                        <div class="banner-home-button mt-5">
                            <a href="#" class="order-btn-contact">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="home-about-one-img">
                        <img src="{{ asset('assets/images/about/home-about-img-2.png') }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-about-area rts-section-gapTopBotm" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="">
                        <span class="w-foods-itilanio">Our Services</span>
                        <h5 class="p-title">Premium Catering Services For Your Taste Only</h5>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="home-about-one-img">
                        <p class="desc">
                            We consider it our responsibility to provide you with a nutritious meal and the comfort of “Ghar
                            ka Khana”. By ensuring all the basic requirements, we make the food easily affordable within
                            your set budget.
                        </p>
                        <div class="banner-home-button mt-5">
                            <a href="#" class="order-btn-contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row pt-5">
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                        <h6 class="pt-3">Corporate Events</h6>
                        <p class="desc">Elevate your corporate event with our premium catering services and customized
                            menu.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                        <h6 class="pt-3">Wedding Events</h6>
                        <p class="desc">Uplift your event with an exquisite menu that lightens the space and boosts your
                            energy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                        <h6 class="pt-3">Social Events</h6>
                        <p class="desc">Grace your social events with our personalized services that fulfill all the
                            requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu area start -->
    <div class="rts-about-area rts-section-gapTopBotm bg-white menu-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <span class="w-foods-itilanio text-site-primary">Our Menu</span>
                    <h5 class="p-title text-white">Finalize Your Menu</h5>
                    <p class="desc text-white">We obtain the best ingredients from our selected vendors and cook the <br>
                        dishes carefully
                        to craft perfection that can be served to your teams.</p>
                </div>
                <div class="col-md-9 p-0 mt-5" style="min-height: 44em;">
                    <div class="shadow bg-white">
                        <ul class="nav nav-tabs menu-tab " id="myTab" role="tablist">
                            @php
                                $menuTypes = \App\Models\MenuType::all();
                            @endphp
                            @foreach ($menuTypes as $key => $menuType)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link py-4 {{ $key == 0 ? 'active' : '' }}"
                                        id="Menu{{ $menuType->id }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#Menu{{ $menuType->id }}" type="button" role="tab"
                                        aria-controls="Menu{{ $menuType->id }}" aria-selected="true">
                                        {{ $menuType->type }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content py-5" id="myTabContent">
                            @foreach ($menuTypes as $key => $menuType)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                    id="Menu{{ $menuType->id }}" role="tabpanel"
                                    aria-labelledby="Menu{{ $menuType->id }}-tab">
                                    <div class="row justify-content-center menuRow{{ $menuType->id }}">
                                        @php
                                            $menuArr['type_id'][$menuType->id]['weeks'] = $menuType->menus->groupBy(
                                                'week',
                                            );
                                        @endphp
                                        @if ($menuType->id != 3)
                                            <div class="col-md-10 menuTab{{ $menuType->id }} menuTab">
                                                <div class="owl{{ $key }} owl-carousel">
                                                    @foreach ($menuType->menus->groupBy('week') as $weekNum => $week)
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-site-danger">Week {{ $weekNum }}</h5>
                                                            </div>
                                                            @foreach ($week as $menu)
                                                                <div class="col-md-6 my-4">
                                                                    <div class="d-flex">
                                                                        <div class="col-2 px-2">
                                                                            <img src="{{ asset($menu->image) }}"
                                                                                alt="" class="rounded-circle">
                                                                        </div>
                                                                        <div class="col-10 px-2">
                                                                            <div class="menu-title mb-2">
                                                                                <p class="menu-name">{{ $menu->name }}
                                                                                </p>
                                                                                <div class="menu-divider"></div>
                                                                                <p class="menu-day text-site-danger">
                                                                                    {{ $menu->day }}</p>
                                                                            </div>
                                                                            <div class="menu-desc">
                                                                                {{ $menu->description }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row pt-5">
                                                    <div class="col-md-6 col-4 text-start">
                                                        <div class="custom-owl-nav d-inline-flex">
                                                            <button type="button" role="presentation"
                                                                class="custom-owl-prev me-1"
                                                                data-number="{{ $key }}">
                                                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                            </button>
                                                            <button type="button" role="presentation"
                                                                class="custom-owl-next ms-1"
                                                                data-number="{{ $key }}">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-8 text-end">
                                                        <button
                                                            class="btn btn-lg text-uppercase p-4 rounded-5 btn-site-primary w-auto selectMenu"
                                                            data-id="{{ $menuType->id }}">Select
                                                            Menu as Above</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end menu area start -->

    <div class="rts-about-area rts-section-gapTopBotm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="w-foods-itilanio">Our Work</span>
                    <h5 class="p-title">Our Working Proccess</h5>
                    <p class="desc">We obtain the best ingredients from our selected vendors and cook the dishes
                        carefully
                        to craft perfection that can be served to your teams.</p>
                </div>
            </div>
            <br />
            <div class="row pt-5 text-center">
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border-working-process">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                    </div>
                    <h6 class="pt-3">Make an Appointment</h6>
                    <p class="desc">Elevate your corporate event with our premium catering services and customized menu.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border-working-process">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                    </div>
                    <h6 class="pt-3">Pay Your Catering</h6>
                    <p class="desc">Uplift your event with an exquisite menu that lightens the space and boosts your
                        energy.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="our-services-grid-border-working-process">
                        <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}" alt="" />
                    </div>
                    <h6 class="pt-3">Enjoy Your Food</h6>
                    <p class="desc">Order the flavorful food and enjoy it with your team and boost the energy of your
                        workspace.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial area start -->
    <div class="rts-testimonial-area rts-section-gap">
        <div class="container">
            <div class="testimonial-area-inner">
                <div class="banner-one-wrapper">
                    <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                        Customers Feedback
                    </h1>
                    <p class="desc" data-sal="slide-up" data-sal-duration="800">It’s the story of an everlasting love
                        affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                </div>

                <div class="swiper-testimonial-main-wrapper" data-sal="slide-up" data-sal-delay="1500"
                    data-sal-duration="800">
                    <div class="swiper swiper-testimonials-1">
                        <div class="left-quote">
                            <img src="{{ asset('assets/images/testimonials/quote-1.webp') }}" alt="testimonial">
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <div class="content">
                                        <h3>
                                            <em>“ Customer feedback is the information, insights, issues, & input shared by
                                                your community about their experiences with your company, product, or
                                                services. ”</em>
                                        </h3>
                                    </div>
                                    <div class="author">
                                        <h5 class="title">Alonso D. Dowson</h5>
                                        <p class="sub-title">ceo of Alonso co.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <div class="content">
                                        <h3>
                                            <em>“ Customer feedback is the information, insights, issues, & input shared by
                                                your community about their experiences with your company, product, or
                                                services. ”</em>
                                        </h3>
                                    </div>
                                    <div class="author">
                                        <h5 class="title">Alonso D. Dowson</h5>
                                        <p class="sub-title">ceo of Alonso co.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <div class="content">
                                        <h3>
                                            <em>“ Customer feedback is the information, insights, issues, & input shared by
                                                your community about their experiences with your company, product, or
                                                services. ”</em>
                                        </h3>
                                    </div>
                                    <div class="author">
                                        <h5 class="title">Alonso D. Dowson</h5>
                                        <p class="sub-title">ceo of Alonso co.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-quote">
                            <img src="{{ asset('assets/images/testimonials/quote-2.webp') }}" alt="testimonial">
                        </div>
                    </div>
                    <div class="next-prev-btn">
                        <div class="swiper-button-prevs"><i class="fa-solid fa-arrow-left-long"></i></div>
                        <div class="swiper-button-nexts"><i class="fa-solid fa-arrow-right-long"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-blog-area-2 rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Blog & Insights
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the
                            story of
                            an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-technical-main-wrapper" data-sal="slide-up" data-sal-delay="1200"
                data-sal-duration="800">
                <div class="swiper mySwiper-blog">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ asset('assets/images/blog/blog-01.jpg') }}" alt="blog">
                                </div>
                                <div class="blog-badge">
                                    <span class="date">12</span>
                                    <span class="month">APR</span>
                                </div>
                                <div class="content">
                                    <p class="tag"><a href="#">Fast Food</a></p>
                                    <h3 class="title"><a href="blog-details.html">Love and food: It is all about dinenos
                                            restaurant</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ asset('assets/images/blog/blog-03.jpg') }}" alt="blog">
                                </div>
                                <div class="blog-badge">
                                    <span class="date">12</span>
                                    <span class="month">APR</span>
                                </div>
                                <div class="content">
                                    <p class="tag"><a href="#">Dinner</a></p>
                                    <h3 class="title"><a href="blog-details.html">Enjoy an exceptional journey of taste
                                            of
                                            joy.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ asset('assets/images/blog/blog-04.jpg') }}" alt="blog">
                                </div>
                                <div class="blog-badge">
                                    <span class="date">12</span>
                                    <span class="month">APR</span>
                                </div>
                                <div class="content">
                                    <p class="tag"><a href="#">Restaurant</a></p>
                                    <h3 class="title"><a href="blog-details.html">The opportunity to work abroad is a
                                            prospect, one</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ asset('assets/images/blog/blog-02.jpg') }}" alt="blog">
                                </div>
                                <div class="blog-badge">
                                    <span class="date">12</span>
                                    <span class="month">APR</span>
                                </div>
                                <div class="content">
                                    <p class="tag"><a href="#">Rice curry</a></p>
                                    <h3 class="title"><a href="blog-details.html">Food is the foundation of true
                                            happiness</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
    <input type="hidden" value="{{ json_encode($menuArr) }}" id="menues">
@endsection
@push('scripts')
    <script>
        const menuFrom = `<div class="col-md-10 menuFrom">
                                <div class="text-center">
                                    <h5 class="text-site-danger">Fill out the information below</h5>
                                    <div class="row text-start">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="site-input required from-control-lg" id="name"
                                                placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="number" name="phone" class="site-input required from-control-lg"
                                                id="phone" placeholder="Enter Your Phone">
                                        </div>
                                    </div>
                                    <div class="row text-start">
                                        <div class="col-md-6 mb-3">
                                            <label for="company" class="form-label">Company Name</label>
                                            <input type="text" name="company" class="site-input required from-control-lg"
                                                id="company" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="persons" class="form-label">Menu for how many persons</label>
                                            <input type="number" name="persons" class="site-input required from-control-lg"
                                                id="persons" placeholder="Enter Numbers of Persons">
                                        </div>
                                    </div>
                                    <div class="row text-start">
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="site-input required from-control-lg"
                                                id="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="form-label">Delivery Address</label>
                                            <input type="text" name="delivery_address" class="site-input required from-control-lg"
                                                id="address" placeholder="Enter Your Address">
                                        </div>
                                    </div>
                                    <div class="row text-start">
                                        <div class="col-md-6 mb-3">
                                            <label for="menu" class="form-label">Menu Type</label>
                                            <select name="menu_type_id" class="site-select" id="menu">
                                                <option value="1">5 Days a week</option>
                                                <option value="2">7 Days a week</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="date" class="form-label">Expected Start Date</label>
                                            <input type="date" name="start_date" class="site-input required from-control-lg"
                                                id="date" placeholder="Select Date">
                                        </div>
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-site-primary btn-lg w-auto py-4 px-5 text-uppercase view-detail">Next
                                            Step</button>
                                    </div>
                                </div>
                            </div>
                            <div class="orderDetail d-none">
                                <div class="col-md-11">
                                    <div class="row weeksDetail">

                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="col-md-11">
                                    <div class="row pt-5">
                                        <h5 class="text-site-danger">Order Details</h5>
                                        <div class="col-md-10">
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Name: </li>
                                                <li class="list-group-item order-data data-name"></li>
                                                <li class="list-group-item order-lable">Email: </li>
                                                <li class="list-group-item order-data data-email"></li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Phone: </li>
                                                <li class="list-group-item order-data data-phone"></li>
                                                <li class="list-group-item order-lable">Delivery Address</li>
                                                <li class="list-group-item order-data data-delivery_address"></li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Company Name: </li>
                                                <li class="list-group-item order-data data-company"></li>
                                                <li class="list-group-item order-lable">Menu Type: </li>
                                                <li class="list-group-item order-data data-menu"></li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Number of individuals: </li>
                                                <li class="list-group-item order-data data-persons"></li>
                                                <li class="list-group-item order-lable">Expected Start Date: </li>
                                                <li class="list-group-item order-data data-start_date"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-11 text-end mt-3">
                                    <button class="btn btn-lg view-form text-uppercase p-4 px-5 rounded-5 btn-light w-auto">Back</button>
                                    <button class="btn btn-lg text-uppercase p-4 rounded-5 btn-site-primary w-auto" id="confirmOrder">Confirm</button>
                                </div>
                            </div>`;

        const menuArray = $('#menues').val();
        var menuObj = JSON.parse(menuArray);

        $(document).ready(function() {
            var firstOwl = $(".owl0").owlCarousel({
                loop: false,
                margin: 10,
                responsiveClass: true,
                dots: false,
                navText: ['&#x27E8;', '&#x27E9;'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: 1,
                        nav: true,
                    }
                }
            });
            var secondOwl = $(".owl1").owlCarousel({
                loop: false,
                margin: 10,
                responsiveClass: true,
                dots: false,
                navText: ['&#x27E8;', '&#x27E9;'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: 1,
                        nav: true,
                    }
                }
            });

            $(document).on('click', '.custom-owl-prev', function() {
                var owl = $(this).data('number') == 0 ? firstOwl : secondOwl;
                owl.trigger('prev.owl.carousel');
            })
            $(document).on('click', '.custom-owl-next', function() {
                var owl = $(this).data('number') == 0 ? firstOwl : secondOwl;
                owl.trigger('next.owl.carousel');
            })
        });
        $(document).on('click', '.nav-link', function() {
            $('.menuTab').removeClass('d-none');
            $('.menuFrom').empty();
            $('.orderDetail').empty();
        })
        $(document).on('click', '.selectMenu', function() {
            var menuId = $(this).data('id');
            const menus = menuObj.type_id[menuId]['weeks'];

            $('.menuTab' + menuId).addClass('d-none');
            $('.menuRow' + menuId).append(menuFrom)
            $('#menu').val(menuId);
            $('#menu').prop('disabled', true);
            $('.data-menu').text(menuId == 1 ? '5 Days Menu' : '7 Days Menu');
            for (var i = 0; i < 4; i++) {
                // console.log(menus , i)
                const weekData = menus[i + 1];
                let weekCol = `<div class="col-md-3 p-md-0 mb-4 mb-md-0">
                            <div class="col-title">
                                <div>
                                    <span class="rounded-circle">
                                        <i class="fa fa-check-circle text-danger" aria-hidden="true"></i>
                                    </span>
                                    <div class="week-divider week-divider${i+1}"></div>
                                </div>
                                <h5 class="text-site-danger">Week ${i+1}</h5>
                            </div>`;
                weekData.forEach((item, index) => {
                    weekCol += `<div class="menu-item">
                            <span class="item-day">${item.day}</span>
                            <span class="item-name">&#8226; ${item.name}</span>
                        </div>`;
                })
                weekCol += `</div>`;
                // console.log(weekCol)
                $('.weeksDetail').append(weekCol);

            }

        })
        $(document).on('click', '.view-detail', function() {
            if (!validate()) return false;
            $('.menuFrom').addClass('d-none');
            $('.orderDetail').removeClass('d-none');
        })
        $(document).on('click', '.view-form', function() {
            $('.menuFrom').removeClass('d-none');
            $('.orderDetail').addClass('d-none');
        })
        $(document).on('change', '.site-input', function() {
            var attr = $(this).attr('name');
            var val = $(this).val();
            $('.data-' + attr).text(val);
        })

        function validate() {
            var valid = true;
            var div = "";
            $(".text-danger").remove();
            $(".required:visible").each(function() {
                if (
                    $(this).val() == "" ||
                    $(this).val() === null ||
                    $(this).attr("type") == "radio" ||
                    ($(this).attr("type") == "checkbox" &&
                        $('[name="' + $(this).attr("name") + '"]:checked').val() ==
                        undefined)
                ) {
                    $(this).attr("type") == "checkbox" ? (div = ".row") : (div = "div");
                    var name = $(this).attr("name");
                    // console.log(name);
                    $(this)
                        .closest(div)
                        .append(
                            '<div class="text-danger" data-field=' +
                            name +
                            ">This field is required</div>"
                        );
                    valid = false;
                }
            });
            if (!valid) {
                var input = $(".alert-danger:first").attr("data-field");
                $('[name="' + input + '"]').focus();
            }
            return valid;
        }

        $(document).on('click', '#confirmOrder', async function() {


            let result = await swal.fire({
                title: "Are you sure?",
                text: "You won't be able to cancel this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm it!",
            });

            if (result.value) {
                const data = {};

                $('.menuFrom input, .menuFrom select').each(function() {
                    const fieldName = $(this).attr('name');
                    const fieldValue = $(this).val().trim();
                    data[fieldName] = fieldValue;
                });

                await $.ajax({
                    type: "POST",
                    url: "/create-order",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            swal.fire("Success!", response.message, "success").then(() => {
                                window.location.reload();
                            });
                        }
                        console.log(response.order);
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = "Please correct the following errors:\n\n";
                        for (const field in errors) {
                            errorMessage += `${errors[field].join(', ')}\n`;
                        }
                        alert(errorMessage);
                    }
                });
            }
        });
    </script>
@endpush
