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
                    <img src="{{ asset('assets/images/banner/home-banner-image.png') }}"
                        alt="banner-right-image">
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
                    <img src="{{ asset('assets/images/about/home-about-image.png') }}"
                        alt="about">
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
                    <img src="{{ asset('assets/images/about/home-about-img-2.png') }}"
                        alt="about">
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
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
                    <h6 class="pt-3">Corporate Events</h6>
                    <p class="desc">Elevate your corporate event with our premium catering services and customized menu.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="our-services-grid-border">
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
                    <h6 class="pt-3">Wedding Events</h6>
                    <p class="desc">Uplift your event with an exquisite menu that lightens the space and boosts your
                        energy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="our-services-grid-border">
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
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
                            <button class="nav-link py-4 {{$key == 0 ? 'active' : ''}}" id="Menu{{$menuType->id}}-tab" data-bs-toggle="tab" data-bs-target="#Menu{{$menuType->id}}"
                                type="button" role="tab" aria-controls="Menu{{$menuType->id}}" aria-selected="true">
                                {{$menuType->type}}
                            </button>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content py-5" id="myTabContent">
                        @foreach ($menuTypes as $key => $menuType)
                        <div class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="Menu{{$menuType->id}}" role="tabpanel" aria-labelledby="Menu{{$menuType->id}}-tab">
                            <div class="row justify-content-center px-2 menuRow{{$menuType->id}}">
                                @php
                                    $menuArr['type_id'][$menuType->id]['weeks'] = $menuType->menus->groupBy('week');
                                @endphp
                                @if ($menuType->id != 3)
                                <div class="col-md-11 menuTab{{$menuType->id}} menuTab">                                
                                    <div class="owl{{$key}} owl-carousel">
                                        @foreach ($menuType->menus->groupBy('week')  as $weekNum => $week)   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-site-danger">Week {{$weekNum}}</h5>
                                            </div>
                                            @foreach ($week as $menu)                                              
                                            <div class="col-md-6 my-4">
                                                <div class="d-flex">
                                                    <div class="col-3 px-2">
                                                        <img src="{{ asset($menu->image) }}"
                                                            alt="" class="rounded-circle px-2">
                                                    </div>
                                                    <div class="col-9 px-2">
                                                        <div class="menu-title mb-2">
                                                            <p class="menu-name">{{$menu->name}}</p>
                                                            <div class="menu-divider"></div>
                                                            <p class="menu-day text-site-danger">{{$menu->day}}</p>
                                                        </div>
                                                        <div class="menu-desc">{{$menu->description}}</div>
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
                                                <button type="button" role="presentation" class="custom-owl-prev me-1" data-number="{{$key}}">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" role="presentation" class="custom-owl-next ms-1" data-number="{{$key}}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-8 text-end">
                                            <button
                                                class="btn btn-lg text-uppercase p-4 rounded-5 btn-site-primary w-auto selectMenu" data-id="{{$menuType->id}}">Select
                                                Menu as Above</button>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-11 menuTab{{$menuType->id}} menuTab">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div id="customStepFrom">
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <h5 class="text-site-danger mb-2">Select Your Meal</h5>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="meal" class="site-input required from-control-lg" id="meal" placeholder="Search Meals">    
                                                </div>
                                                <div class="col-6">
                                                    <select name="type" class="site-select custom-meal-selector" id="type">
                                                        <option value="1">5 Days a week</option>
                                                        <option value="2">7 Days a week</option>
                                                    </select>   
                                                </div>
                                            </div>
                                            <div class="row mealUl"  style="max-height: 30em; overflow-y:auto">
                                            @foreach ($menuType->menus->unique('name') as $menu)                                              
                                            <div class="col-12 my-3 meal-item" data-name="{{$menu->name}}" data-id="{{$menu->id}}">
                                                <div class="d-flex">
                                                    <div class="col-3 px-2">
                                                        <img src="{{ asset($menu->image) }}"
                                                            alt="" class="rounded-circle">
                                                    </div>
                                                    <div class="col-9 px-2">
                                                        <div class="menu-title mb-2">
                                                            <p class="menu-name">{{$menu->name}}</p>
                                                            <div class="menu-divider"></div>
                                                        </div>
                                                        <div class="menu-desc">{{$menu->description}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                <p class="desc">We obtain the best ingredients from our selected vendors and cook the dishes carefully
                    to craft perfection that can be served to your teams.</p>
            </div>
        </div>
        <br />
        <div class="row pt-5 text-center">
            <div class="col-lg-4 col-md-12">
                <div class="our-services-grid-border-working-process">
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
                </div>
                <h6 class="pt-3">Make an Appointment</h6>
                <p class="desc">Elevate your corporate event with our premium catering services and customized menu.</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="our-services-grid-border-working-process">
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
                </div>
                <h6 class="pt-3">Pay Your Catering</h6>
                <p class="desc">Uplift your event with an exquisite menu that lightens the space and boosts your energy.
                </p>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="our-services-grid-border-working-process">
                    <img src="{{ asset('assets/images/about/Corporate Events Icon.svg') }}"
                        alt="" />
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
                        <img src="{{ asset('assets/images/testimonials/quote-1.webp') }}"
                            alt="testimonial">
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
                        <img src="{{ asset('assets/images/testimonials/quote-2.webp') }}"
                            alt="testimonial">
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
                    <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the story of
                        an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                </div>
            </div>
        </div>
        <div class="swiper-technical-main-wrapper" data-sal="slide-up" data-sal-delay="1200" data-sal-duration="800">
            <div class="swiper mySwiper-blog">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-wrapper">
                            <div class="image-part">
                                <img src="{{ asset('assets/images/blog/blog-01.jpg') }}"
                                    alt="blog">
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
                                <img src="{{ asset('assets/images/blog/blog-03.jpg') }}"
                                    alt="blog">
                            </div>
                            <div class="blog-badge">
                                <span class="date">12</span>
                                <span class="month">APR</span>
                            </div>
                            <div class="content">
                                <p class="tag"><a href="#">Dinner</a></p>
                                <h3 class="title"><a href="blog-details.html">Enjoy an exceptional journey of taste of
                                        joy.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-wrapper">
                            <div class="image-part">
                                <img src="{{ asset('assets/images/blog/blog-04.jpg') }}"
                                    alt="blog">
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
                                <img src="{{ asset('assets/images/blog/blog-02.jpg') }}"
                                    alt="blog">
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
<input type="hidden" value="{{json_encode($menuArr)}}" id="menues">

@endsection
@push('scripts')
    
    <script>
        const menuFrom =    `<div class="col-md-10 menuFrom">                                
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
                                            <input type="text" name="address" class="site-input required from-control-lg"
                                                id="address" placeholder="Enter Your Address">
                                        </div>
                                    </div>
                                    <div class="row text-start">
                                        <div class="col-md-6 mb-3">
                                            <label for="menu" class="form-label">Menu Type</label>
                                            <select name="menu" class="site-select" id="menu">
                                                <option value="1">5 Days a week</option>
                                                <option value="2">7 Days a week</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="date" class="form-label">Expected Start Date</label>
                                            <input type="date" name="date" class="site-input required from-control-lg"
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
                                <div class="col-md-12 px-5">
                                    <div class="row weeksDetail">
                                        
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row pt-5">
                                        <h5 class="text-site-danger">Order Details</h5>
                                        <div class="col-md-10">
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Name: </li>
                                                <li class="list-group-item order-data data-name">Shams Aftab</li>
                                                <li class="list-group-item order-lable">Email: </li>
                                                <li class="list-group-item order-data data-email">Shams Aftab</li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Phone: </li>
                                                <li class="list-group-item order-data data-phone">Shams Aftab</li>
                                                <li class="list-group-item order-lable">Delivery Address</li>
                                                <li class="list-group-item order-data data-address">Shams Aftab</li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Company Name: </li>
                                                <li class="list-group-item order-data data-company">Shams Aftab</li>
                                                <li class="list-group-item order-lable">Menu Type: </li>
                                                <li class="list-group-item order-data data-menu">Shams Aftab</li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal m-0 orderDetailList">
                                                <li class="list-group-item order-lable">Number of individuals: </li>
                                                <li class="list-group-item order-data data-persons">Shams Aftab</li>
                                                <li class="list-group-item order-lable">Expected Start Date: </li>
                                                <li class="list-group-item order-data data-date">Shams Aftab</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                        <img src="/assets/images/order-confirmation.gif" class="orderPlacedImg d-none" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 orderConfirmed text-end mt-3 px-5">
                                    <button class="btn btn-lg view-form text-uppercase p-4 px-5 rounded-5 btn-light w-auto">Back</button>
                                    <button class="btn btn-lg place-order text-uppercase p-4 rounded-5 btn-site-primary w-auto">Confirm</button>
                                </div>
                                <div class="col-md-12 orderPlaced d-md-none d-none text-md-end mt-3 bg-site-danger p-3 d-md-flex justify-content-around align-items-center">
                                    <p class="fs-5 text-white m-0">Your Order has been Confirmed! You’ll soon receive a confirmation message on your Email.</p>
                                    <button class="btn btn-lg text-uppercase p-4 rounded-5 btn-warning w-auto" style="border-radius: 12px;background-color: #FBB03B;border-color: #FBB03B;">Back To Home</button>
                                </div>
                            </div>`;

        const menuArray = $('#menues').val();
        var menuObj = JSON.parse(menuArray);

        $(document).ready(function () {
            createCustomStepsForm();
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
            
            $(document).on('click', '.custom-owl-prev', function () {
                var owl = $(this).data('number') == 0 ? firstOwl : secondOwl;
                owl.trigger('prev.owl.carousel');                
            })
            $(document).on('click', '.custom-owl-next', function () {
                var owl = $(this).data('number') == 0 ? firstOwl : secondOwl;
                owl.trigger('next.owl.carousel');                
            })
        });
       $(document).on('click' , '.nav-link' , function(){
            $('.menuTab').removeClass('d-none');
            $('.menuFrom').empty();
            $('.orderDetail').empty();
            resetCustomFrom();
       })
        $(document).on('click' , '.selectMenu' , function() {
            var menuId = $(this).data('id');
            const menus = menuObj.type_id[menuId]['weeks'];
            
            $('.menuTab'+menuId).addClass('d-none');
            $('.menuRow'+menuId).append(menuFrom)
            $('#menu').val(menuId);
            $('#menu').prop('disabled', true);
            $('.data-menu').text(menuId == 1 ? '5 Days Menu' : '7 Days Menu');
            for (var i = 0; i < 4; i++) {
                const weekData = menus[i+1];
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
                weekData.forEach((item ,index) => {
                    weekCol += `<div class="menu-item">
                            <span class="item-day">${item.day}</span>
                            <span class="item-name">&#8226; ${item.name}</span>
                        </div>`;
                })
                weekCol += `</div>`;
                $('.weeksDetail').append(weekCol);

            }

        })
        $(document).on('click', '.view-detail' , function(){
            if (!validate()) return false;
            $('.menuFrom').addClass('d-none');
            $('.orderDetail').removeClass('d-none');
        })
        $(document).on('click', '.view-form' , function(){
            $('.menuFrom').removeClass('d-none');
            $('.orderDetail').addClass('d-none');
        })
        $(document).on('change' , '.site-input' , function(){
            var attr =$(this).attr('name');
            var val =$(this).val();
            $('.data-'+attr).text(val);
        })
        function validate() {
            var valid = true;
            var div = "";
            $(".alert-danger").remove();
            $(".required:visible").each(function () {
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
                    $(this)
                        .closest(div)
                        .append(
                            '<div class="alert-danger" data-field=' +
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
        $(document).on('change' , '.custom-meal-selector' , function(){
            resetCustomFrom()
        })
        function createCustomStepsForm()
        {
            let html = ``;
            for (var i = 1; i < 5; i++) {
                html += `<h5 class="text-site-danger mb-2 text-center">
                            <div class="custom-divider startNode${i}"></div>
                            <span class="d-grid">
                                <i class="fa fa-circle fs-6 icon${i}"></i>
                            </span>
                            <div class="custom-divider endNode${i}"></div>
                        </h5>
                        <section class="pt-0">
                            <h5 class="text-site-danger">
                                Week ${i}
                            </h5>
                            <div class="custom-week${i}">
                                
                            </div>
                        </section>`;
            }
            $('#customStepFrom').html(html);
            createCustomItemBox()
            $("#customStepFrom").show().steps({
                headerTag: "h5",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                stepsOrientation: "vertical"
            });
            $('a[href="#next"]')
            .addClass('disabled btn-light')    // Add the 'disabled' class
            .attr('href', '#new'); 
            $('a[href="#finish"]').addClass('d-none').text('Next');
        }
        let emptyMealArray = [];
        let selectedMealArray = [];
        let currentIndex = 0;
        let currentDayIndex = 0;
        let removedDaysArray;
        function createCustomItemBox()
        {
            const weekDays = {
                1 : ["Mon","Tue","Wed","Thu","Fri",],
                2 : ["Mon","Tue","Wed","Thu","Fri","Sat","Sun",]
            };
            const days = weekDays[$('.custom-meal-selector').val()];
            for (var i = 1; i < 5; i++) {
                let html = ``;
                emptyMealArray.push([]);
                days.forEach((value , index) => {
                    emptyMealArray[i-1].push(value);
                    html += `<div class="col-12 mb-4">
                                <div class="add-item-custom-btn bg-light customDiv${value}${i}">
                                    <span class="custom-add-span customAdd${value}${i}">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="custom-remove-span d-none customRemove${value}${i}" data-day="${value}" data-week="${i}">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    <p class="ms-4 item${value}${i}">Add Item</p>
                                </div>
                                <input type="hidden" class="input${value}${i} customInputData" name="meal_id[]" data-day="${value}" data-week="${i}" data-name="${i}" />
                            </div>`;
                })
                $('.custom-week'+i).html(html);
            }
            removedDaysArray = JSON.parse(JSON.stringify(emptyMealArray));
        }
        $(document).on('click', '.custom-remove-span' , function()
        {
            let index = $(this).data('week');
            let day = $(this).data('day');
            $('.customRemove'+day+index).addClass('d-none');
            $('.customAdd'+day+index).removeClass('d-none');
            $('.item'+day+index).text('Add Item');
            $('.customDiv'+day+index).removeClass('bg-light').addClass('bg-light');
            index = index-1;
            if (index >= 0 && index < emptyMealArray.length) {
                if (!emptyMealArray[index].includes(day)) {
                    emptyMealArray[index].unshift(day);
                    if(emptyMealArray[index].length === 1)
                    {
                        currentIndex--;
                    }
                }
            }
            resetCustomFromUi();
        })
        $(document).on('click' , '.meal-item' , function(){
            if($('a[href="#next"]').length == 1 )
            {
                return false;
            }
            var id = $(this).data('id');
            var name = $(this).data('name');
            if (currentIndex < emptyMealArray.length) {
                var week = currentIndex+1;
                var day = emptyMealArray[currentIndex][currentDayIndex];
                $('.input'+day+week).val(id);
                $('.input'+day+week).attr('data-name' , name);
                $('.item'+day+week).text(name);
                $('.customRemove'+day+week).removeClass('d-none');
                $('.customAdd'+day+week).addClass('d-none');
                $('.customDiv'+day+week).addClass('bg-light').removeClass('bg-light');
                // Remove a day from the current sub-array
                emptyMealArray[currentIndex].splice(currentDayIndex, 1);
                
                // If the sub-array is empty, move to the next index
                if (emptyMealArray[currentIndex].length === 0) {
                    $('.mealUl').addClass('bg-light');
                    $('.mealUl').css('cursor' , 'not-allowed');
                    $('.meal-item').css('cursor' , 'not-allowed');
                    $('a[href="#new"]')
                    .removeClass('disabled btn-light')    // Add the 'disabled' class
                    .attr('href', '#next'); 
                    $('a[href="#finish"]')
                    .removeClass('d-none'); 
                    currentIndex++;
                    currentDayIndex = 0; // Reset day index for the next array
                }
            }
        })
        $(document).on('click', 'a[href="#next"]', function(event) {
            event.preventDefault(); // Prevent the default anchor click behavior
            resetCustomFromUi();
        });
        $(document).on('click', 'a[href="#previous"]', function(event) {
            event.preventDefault(); // Prevent the default anchor click behavior
            var count = 0;
            $('.customInputData').each((index , ele) =>{
                if($(ele).val())
                {
                    count++;
                }
            });
            var moveArray = [5,10,15,20,7,14,21,28];
            if(moveArray.includes(count)){
                $('a[href="#new"]')
                .removeClass('disabled btn-light')    // Add the 'disabled' class
                .attr('href', '#next'); 
                $('a[href="#finish"]')
                .removeClass('d-none'); 
            }
        });
        $(document).on('click', 'a[href="#finish"]', function(event) {
            var menuId = $('.custom-meal-selector').val();
            var array = [];
            $('.weeksDetail').empty();
            $('.customInputData').each((index , ele) =>{
                var obj = {
                    'id' : $(ele).val(),
                    'week' : $(ele).data('week'),
                    'day' : $(ele).data('day'),
                    'name' : $(ele).data('name')
                };
                array.push(obj)
            })
            var menu = array.reduce((acc, item) => {
                // Initialize an array for the week if it doesn't exist
                if (!acc[item.week]) {
                    acc[item.week] = [];
                }
                // Add the item to the corresponding week array
                acc[item.week].push(item);
                return acc;
            }, {});
            $('.menuTab3').addClass('d-none');
            $('.menuRow3').append(menuFrom)
            $('#menu').val(menuId);
            $('#menu').prop('disabled', true);
            $('.data-menu').text(menuId == 1 ? '5 Days Menu' : '7 Days Menu');
            for (var i = 1; i < 5; i++) {
                const weekData = menu[i];
                let weekCol = `<div class="col-md-3 p-md-0 mb-4 mb-md-0">
                            <div class="col-title">
                                <div>
                                    <span class="rounded-circle">
                                        <i class="fa fa-check-circle text-danger" aria-hidden="true"></i>
                                    </span>
                                    <div class="week-divider week-divider${i}"></div>
                                </div>
                                <h5 class="text-site-danger">Week ${i}</h5>
                            </div>`;
                weekData.forEach((item ,index) => {
                    weekCol += `<div class="menu-item">
                            <span class="item-day">${item.day}</span>
                            <span class="item-name">&#8226; ${item.name}</span>
                        </div>`;
                })
                weekCol += `</div>`;
                $('.weeksDetail').append(weekCol);

            }
            
        });
        $(document).on("keyup", "#meal", function (e) {
            var value = $(this).val().toLowerCase();
            searchMeal(value);
        });
        function searchMeal(value) {
            var ul = $(".mealUl");
            //get all list but not the one having search input
            var li = ul.find(".col-12");
            //hide all lis
            li.hide();
            li.filter(function () {
                var text = $(this).find(".menu-name").text().toLowerCase();
                return text.indexOf(value) >= 0;
            }).show();
        }
        function resetCustomFromUi()
        {
            $('.mealUl').removeClass('bg-light');
            $('.mealUl').css('cursor' , 'auto');
            $('.meal-item').css('cursor' , 'pointer');
            $('a[href="#next"]')
            .addClass('disabled btn-light')    // Add the 'disabled' class
            .attr('href', '#new'); 
            $('a[href="#finish"]')
            .addClass('d-none')
        }
        function resetCustomFrom()
        {
            emptyMealArray = [];
            removedDaysArray = null;
            selectedMealArray = [];
            currentIndex = 0;
            currentDayIndex = 0;
            removedDaysArray = null;
            $('#customStepFrom').empty();
            createCustomStepsForm();
            resetCustomFromUi();
        }
        $(document).on('click' , '.place-order' , function(){
            $('.orderConfirmed').addClass('d-none');
            $('.orderPlaced').removeClass('d-md-none d-none');
            $('.orderPlacedImg').removeClass('d-none');
        })
    </script>
@endpush
