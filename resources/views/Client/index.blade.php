@php
    $setting = App\Models\Setting::find(1);
@endphp
@extends('client.layout.layout')
{{-- Заголовок для страницы --}}
@section('title') {{ __('Главная страница') }} @endsection
{{-- Контент для страницы --}}
@section('content')
    <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 text-center mx-auto">
                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                        <span>We clean your</span>
                        <span class="cd-words-wrapper">
                                    <b class="is-visible">House</b>
                                    <b>Office</b>
                                    <b>Kitchen</b>
                                </span>
                    </h1>

                    <a class="custom-btn btn button button--atlas smoothscroll me-3" href="#intro-section">
                        <span>Introduction</span>

                        <div class="marquee" aria-hidden="true">
                            <div class="marquee__inner">
                                <span>Introduction</span>
                                <span>Introduction</span>
                                <span>Introduction</span>
                                <span>Introduction</span>
                            </div>
                        </div>
                    </a>

                    <a class="custom-btn custom-border-btn custom-btn-bg-white btn button button--pan smoothscroll" href="#services-section">
                        <span>Explore Services</span>
                    </a>
                </div>

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>


    <section class="intro-section" id="intro-section">
        <div class="container">
            <div class="row justify-content-lg-center align-items-center">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Reliable &amp; Fast Cleaning <br> Service</h2>

                    <p><a href="#">Clean Work</a> is a Bootstrap v.5.1.3 HTML CSS template for free download provided by Tooplate. You can use this layout for any purpose. Images are taken from <a rel="nofollow" href="https://www.freepik.com/" target="_blank">FreePik</a> and <a rel="nofollow" href="https://worldvectorlogo.com/" target="_blank">WorldVectorLogo</a> websites.</p>
                    <p>You <strong>may not</strong> redistribute this template ZIP file on any other template collection website. Please <a href="https://www.tooplate.com/contact" target="_blank">contact us</a> for more info. Thank you.</p>
                </div>

                <div class="col-lg-6 col-12 custom-block-wrap">
                    <img src="{{ asset('/assets/images/male-wearing-apron-female-white-t-shirt-smiling-broadly-being-glad-clean.png') }}" class="img-fluid">

                    <div class="custom-block d-flex flex-column">
                        <h6 class="text-white mb-3">Need Help? <br> Please call us:</h6>

                        <p class="d-flex mb-0">
                            <i class="bi-telephone-fill custom-icon me-2"></i>

                            <a href="tel: 110-220-9800">
                                {{$setting->phone_number}}
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services-section section-padding section-bg" id="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    @forelse($products as $product)

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">

                                    <div class=" col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services_detail">
                                                <img src="{{Storage::url($product->image)}}" class="services-image img-fluid" alt="">
                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            {{$product->price}}
                                                        </p>


                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href={{ route('client.services_detail', $product->id) }}>{{$product->title}}</a>
                                            </h4>

                                            <p>{{$product->content}}</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">

                                                </div>
                                                <a href="{{ route('client.services_detail', $product->id) }}" class="custom-btn btn button button--atlas mt-2 ">
                                                    <span>Перейти</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{__ ('Данные не найдены')}}
                    @endforelse
                </div>
            </div>
        </div>
    </section>
{{--    <section class="services-section section-padding section-bg" id="services-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-12">--}}
{{--                    <h2 class="mb-4">Our best offers</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="{{ asset('/assets/images/services/people-taking-care-office-cleaning.jpg') }}" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="{{ asset('/assets/images/services/person-taking-care-office.jpg') }}" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $820--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    5 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Kitchen Cleaning</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star"></i>--}}
{{--                                            <i class="bi-star"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="{{ asset('/assets/images/services/young-smiling-woman-wearing-rubber-gloves-cleaning-stove.jpg') }}" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="{{ asset('/assets/images/services/woman-holding-rag-detergent-cleaning-cooker.jpg') }}" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $640--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    4 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Kitchen Cleaning</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb mb-lg-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="{{ asset('/assets/images/services/man-polishing-car-inside-car-service.jpg') }}" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="{{ asset('/assets/images/services/man-polishing-car-inside.jpg') }}" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $240--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    2 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Car Washing</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb mb-lg-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="{{ asset('/assets/images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg') }}" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="{{ asset('/assets/images/services/close-up-mop-cleaning-industrial-plant-floor.jpg') }}" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $6,800--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    30 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Factory Cleaning</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="testimonial-section section-padding section-bg">
        <div class="section-overlay"></div>


        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="text-white mb-4">Happy Customers</h2>
                </div>
                @forelse($reviews as $review)

                    <div class="col-lg-5 col-12">
                        <div class="featured-block">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{Storage::url($review->image)}}" class="avatar-image img-fluid">

                                <div class="ms-3">
                                    <h4 class="mb-0">{{$review->name}}</h4>

                                    <div class="reviews-icons mb-1">
                                        @if($review->rating == 0)
                                            <div class="text-left">
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        @elseif($review->rating == 1)
                                            <div class="text-left">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        @elseif($review->rating == 2)
                                            <div class="text-left">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        @elseif($review->rating == 3)
                                            <div class="text-left">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        @elseif($review->rating == 4)
                                            <div class="text-left">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        @elseif($review->rating == 5)
                                            <div class="text-left">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0">{{$review->text}}</p>
                        </div>

                    </div>
                @empty
                    {{__ ('Данные не найдены')}}
                @endforelse
            </div>
        </div>

    </section>


    <section class="partners-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-12 col-12">
                    <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                </div>
                @forelse($partners as $partner)

                <div class="col-lg-2 col-md-4 col-6">
                    <img  src="{{Storage::url($partner->image)}}" class="partners-image img-fluid">
                </div>
                @empty
                    {{__ ('Данные не найдены')}}
                @endforelse


            </div>
        </div>
    </section>
@endsection
