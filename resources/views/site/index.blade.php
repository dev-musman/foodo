@extends('layouts.app')
@section('content')
<!-- banner start -->
<div class="rts-banner-main-area-swiper banner-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-left-image">
                    <span class="w-food-itilanio">Welcome To Foodo</span>
                    <h1 class="p-title"><span class="text-danger">Homemade Khana</span> <span class="fw-normal">Right to Your Office</span></h1>
                    <p class="desc fs-1">Make Your Teams Happy with Ghar ka Khana</p>
                    <div class="banner-home-button d-flex">
                        <a href="#" class="order-btn-contact">Contact Us</a>
                        <a href="#" class="order-btn-see-menu">SEE Menu</a>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="" data-sal="zoom-in" data-sal-delay="600" data-sal-duration="600">
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
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row shadow">
                    <div class="col-md-6 p-0">
                        <div class="home-about-one-img">
                            <img src="{{ asset('assets/images/about/home-about-image.png') }}"
                                alt="about">
                        </div>
                    </div>
                    <div class="col-md-6 home-about-heading pb-3">
                        <div class="ps-4">
                            <h3 class="p-title">A Well-Fed Team Is a Happy Team</h3>
                            <p class="desc text-danger fs-5 fw-bold">Book Delicious & Fresh Lunch Goodness for Your Corporate Teams</p>
                            <h4 class="p-title border-danger border-start ps-4 border-5">Craving Ghar ka Khana at Lunch?</h4>
                            <p>Register your group for an amazing lunchtime</p>
                            <ul class="list-style-auto">
                                <li>Select your chosen menu</li>
                                <li>Place your order with the team *Minimum order restriction apply</li>
                                <li>Enjoy your food at the designated time</li>
                            </ul>
                            <br>
                            <div class="banner-home-button mt-5">
                                <a href="#" class="btn btn-site-primary w-auto text-uppercase px-5 py-3 fs-5 booking-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-about-area rts-section-gapTopBotm bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">
                    <h5 class="p-title d-flex">
                        <img src="{{asset('assets/images/home/qoute.png')}}" alt="qoute"  class="me-3 qoute-img">
                        The Food You Eat Should Be Perfect,
                        And This Is Our Responsibility
                    </h5>
                    <p class="desc mb-4">At Foodo, we are dedicated to providing the best food by sourcing top-quality
                        ingredients from our selected vendors. It helps to ensure freshness with an irresistible taste
                        that savors your hunger.</p>
                    <div class="d-block my-3">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2 fw-bold text-black">Quality Food</p>
                            <p>92%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="92"></div>
                        </div>
                    </div>
                    <div class="d-block my-3">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2 fw-bold text-black">Various Menus</p>
                            <p>90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                        </div>
                    </div>
                    <p class="desc mb-3">We consider it our responsibility to provide you with a nutritious meal and the
                        comfort of “Ghar ka Khana”. By ensuring all the basic requirements, we make the food easily
                        affordable within your set budget.</p>
                    <br>
                    <div class="banner-home-button pb-3">
                    <a href="#" class="btn btn-site-primary w-auto text-uppercase px-5 py-3 fs-5 booking-btn">About Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="home-about-one-img">
                    <img src="{{ asset('assets/images/about/home-about-img-2.png') }}"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-about-area rts-section-gapTopBotm" style="background-color: #F9F7F2;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">
                    <span class="w-foods-itilanio">Our Services</span>
                    <h4 class="p-title">Premium Catering Services For Your Taste Only</h4>
                </div>
            </div>
            <div class="col-md-5">
                <div class="home-about-one-img">
                    <p class="desc fs-5 mb-4">
                    Foodo offers an absolute dining experience with premium corporate lunch catering services that exclusively match your taste. From an elegant menu to unmatchable service, we guarantee you a lasting impression.
                    </p>
                    <div class="banner-home-button mt-5">
                        <a href="#" class="order-btn-contact text-uppercase">All Services</a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-services-grid-border mb-3">
                            <img src="{{ asset('assets/images/about/Corporate-Events-Icon.svg') }}"
                                alt="" />
                            <h6 class="py-4 m-0">Corporate Events</h6>
                            <p class="desc mb-4">Elevate your corporate event with our premium catering services and customized menu.
                            </p>
                            <a href="" class="service-link">
                                Read more
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-services-grid-border mb-3">
                            <img src="{{ asset('assets/images/about/Wedding-Events-Icon.svg') }}"
                                alt="" />
                            <h6 class="py-4 m-0">Wedding Events</h6>
                            <p class="desc mb-4">Uplift your event with an exquisite menu that lightens the space and boosts your
                                energy.</p>
                            <a href="" class="service-link">
                                Read more
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-services-grid-border mb-3">
                            <img src="{{ asset('assets/images/about/Social-Events-Icon.svg') }}"
                                alt="" />
                            <h6 class="py-4 m-0">Social Events</h6>
                            <p class="desc mb-4">Grace your social events with our personalized services that fulfill all the
                                requirements.</p>
                            <a href="" class="service-link">
                                Read more
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
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
            <div class="col-md-10 p-0 mt-5" style="min-height: 44em;">
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
                <h3 class="p-title">Our Working Proccess</h3>
                <p class="desc">We obtain the best ingredients from our selected vendors and cook the <br> dishes carefully
                    to craft perfection that can be served to your teams.</p>
            </div>
        </div>
        <br />
        <div class="row pt-5 text-center">
            <div class="col-md-4 mb-4">
                <div>
                <span class="bg-danger rounded-circle p-4 text-white fw-bold">
                        01
                    </span>
                <div class="border border-2 border-danger p-5 position-relative m-auto working-process">
                    <img src="{{ asset('assets/images/working-process/appointment.svg') }}"
                        alt="" />
                </div>
                
                    </div>
                <h6 class="my-3">Make an Appointment</h6>
                <p class="desc px-5 fs-5">Book an appointment with us to get the best-cooked and flavorous meals for your teams</p>
            </div>
            <div class="col-md-4 mb-4">
                <div>
                <span class="bg-danger rounded-circle p-4 text-white fw-bold">
                        02
                    </span>
                <div class="border border-2 border-danger p-5 position-relative m-auto working-process">
                    <img src="{{ asset('assets/images/working-process/food.svg') }}"
                        alt="" />
                </div>
                </div>

                <h6 class="my-3">Pay Your Catering</h6>
                <p class="desc px-5 fs-5">We offer secure payment options for corporate lunch catering services to ensure a hassle-free process.
                </p>
            </div>
            <div class="col-md-4 mb-4">
                <div>
                <span class="bg-danger rounded-circle p-4 text-white fw-bold">
                        03
                    </span>
                <div class="border border-2 border-danger p-5 position-relative m-auto working-process">
                    <img src="{{ asset('assets/images/working-process/catering.svg') }}"
                        alt="" />
                </div>
                </div>

                <h6 class="my-3">Enjoy Your Food</h6>
                <p class="desc px-5 fs-5">Order the flavorful food and enjoy it with your team and boost the energy of your workspace.</p>
            </div>
        </div>
    </div>
</div>

<!-- testimonial area start -->
<div class="rts-testimonial-area rts-section-gap">
    <div class="container-fluid p-0">
        <div class="testimonial-area-inner">
            <div class="banner-one-wrapper">
                <h4 class="mb-5" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                Our Taste Speaks Through <br> <span class="text-danger">Hundreds of Clients</span>
                </h4>
            </div>

            <div class="swiper-testimonial-main-wrapper" >
                <div class="swiper swiper-testimonials-1" data-sal="slide-up" data-sal-delay="1500"
                data-sal-duration="800">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrapper">
                                <div class="content">
                                    <span class="w-foods-itilanio">Testimonial</span>
                                    <h4 class="text-danger">What They Say</h4>
                                    <img src="{{asset('assets/images/team/01.webp')}}" class="rounded-circle border border-2 border-danger testimonial-img" alt="">
                                    <div class="rating my-3">
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                    </div>
                                    <h3>
                                        <em>Honestly, they have the best corporate lunch catering service. The food was delicious, too. I can’t forget the taste of every dish. It was worth it having them for a corporate event. They filled every block. From the food service, everything was fantastic.</em>
                                    </h3>
                                </div>
                                <div class="author text-center m-0 p-0">
                                    <h5 class="title fs-4">Kaleem Zahid</h5>
                                    <p class="sub-title fs-6 fw-light">Corporate Employee</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrapper">
                                <div class="content">
                                    <span class="w-foods-itilanio">Testimonial</span>
                                    <h4 class="text-danger">What They Say</h4>
                                    <img src="{{asset('assets/images/team/01.webp')}}" class="rounded-circle border border-2 border-danger testimonial-img" alt="">
                                    <div class="rating my-3">
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                        <i class="fa-solid fa-star text-danger"></i>
                                    </div>
                                    <h3>
                                        <em>Honestly, they have the best corporate lunch catering service. The food was delicious, too. I can’t forget the taste of every dish. It was worth it having them for a corporate event. They filled every block. From the food service, everything was fantastic.</em>
                                    </h3>
                                </div>
                                <div class="author text-center m-0 p-0">
                                    <h5 class="title fs-4">Kaleem Zahid</h5>
                                    <p class="sub-title fs-6 fw-light">Corporate Employee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->

<div class="rts-about-area rts-section-gapTopBotm" style="background-color: #F9F7F2;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-4">
                <span class="w-foods-itilanio">Our Packages</span>
                <h4 class="p-title">Choose Your Menu – Choices for  <br>Foodies Like You!</h4>
            </div>
            <div class="col-md-3">
                <div class="px-3 py-5 border border-danger text-center d-grid my-3" style="border-radius:15px;    min-height: 25em;">
                    <div>
                    <h5 class="fs-4 mb-3">Hostel Menu</h5>
                    <h4 class="text-danger fs-3 mb-0">30 Individuals</h4>
                    <p class="m-0 fw-light fs-6 border-bottom">Minimum</p>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            7 days a week
                        </li>
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            Selected items only
                        </li>
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            Free Delivery
                        </li>
                    </ul>
                    <button class="btn btn-site-primary w-auto text-uppercase px-5 py-3 fs-5 booking-btn">Book Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="px-3 py-5 border border-danger text-center d-grid my-3" style="border-radius:15px;    min-height: 25em;">
                    <div>
                    <h5 class="fs-4 mb-3">Corporate Menu</h5>
                    <h4 class="text-danger fs-3 mb-0">30 Individuals</h4>
                    <p class="m-0 fw-light fs-6 border-bottom">Minimum</p>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            5 days a week
                        </li>
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            8 Main Course Menu
                        </li>
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            All Menu Items
                        </li>
                        <li>
                            <i class="fa fa-check me-4 text-danger"></i>
                            Free Delivery
                        </li>
                    </ul>
                    <button class="btn btn-site-primary w-auto text-uppercase px-5 py-3 fs-5 booking-btn">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-about-area rts-section-gapTopBotm bg-white booking-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h5 class="p-title text-white">Ready to Book The Catering For <br> Your Special Event?</h5>
                <p class="desc text-white">Get our best corporate lunch catering services for your special event and ensure a <br>smooth interplay of flavors and aromas emanating from our delicious food.</p>
                <button class="btn btn-warning border-none w-auto py-3 px-5 fs-4 rounded-0 text-uppercase">Schedule Taste Testing</button>
            </div>
        </div>
    </div>
</div>
<!-- blog area start -->
<div class="rts-blog-area rts-blog-area-2 rts-section-gap">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-12 text-center mb-5">
                <span class="w-foods-itilanio">Our Blogs</span>
                <h4 class="p-title">Latest Blog & Articles</h4>
                <p class="desc">Learn more about our processes and stay informed about the latest <br> trends in the food industry.</p>
            </div>
            <div class="col-md-5">
                <div class="blog-wrapper d-flex">
                    <div class="image-part col-5">
                        <img src="{{ asset('assets/images/blog/blog-03.jpg') }}"
                            alt="blog" class="h-100 w-100 obj-fit-contain">
                    </div>
                    <div class="content text-start p-3 col-7">
                        <h5 class="fs-3 mb-md-4 m-0">Catering Ideas for Baby
                        Showers In 2021</h5>
                        <p class="m-0 fs-5"><i class="fa fa-clock pe-4"></i>October 18, 2021</p>
                        <p class="py-md-3 m-0 fs-5">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                        <a href="" class="service-link text-danger text-uppercase fs-5 fw-bold">
                            Read more
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="blog-wrapper d-flex">
                    <div class="image-part col-5">
                        <img src="{{ asset('assets/images/blog/blog-03.jpg') }}"
                            alt="blog" class="h-100 w-100 obj-fit-contain">
                    </div>
                    <div class="content text-start p-3 col-7">
                        <h5 class="fs-3 mb-md-4 m-0">Catering Ideas for Baby
                        Showers In 2021</h5>
                        <p class="m-0 fs-5"><i class="fa fa-clock pe-4"></i>October 18, 2021</p>
                        <p class="py-3 m-0 fs-5">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut
                            labore et dolore magna</p>
                        <a href="" class="service-link text-danger text-uppercase fs-5 fw-bold">
                            Read more
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
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
                                <div class="col-md-12 px-md-5">
                                    <div class="row weeksDetail">
                                        
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="col-md-12 px-md-5">
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
