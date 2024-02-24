@extends('Client.layout.layout')
@section('title') {{__('Главная страница')}}@endsection
@section('content')
    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Services Listing</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Services Listing</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="services-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="services-thumb section-bg mb-lg-0">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="services-image-wrap">
                                    <a href="services_detail">
                                        <img src="{{asset('/assets/images/services/people-taking-care-office-cleaning.jpg')}}" class="services-image img-fluid" alt="">
                                        <img src="{{asset('/assets/images/services/person-taking-care-office.jpg')}}" class="services-image services-image-hover img-fluid" alt="">

                                        <div class="services-icon-wrap">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-white mb-0">
                                                    <i class="bi-cash me-2"></i>
                                                    $820
                                                </p>

                                                <p class="text-white mb-0">
                                                    <i class="bi-clock-fill me-2"></i>
                                                    5 hrs
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                    <h4 class="services-title mb-1 mb-lg-2">
                                        <a class="services-title-link" href="services_detail">Office Cleaning</a>
                                    </h4>

                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                            <i class="bi-star"></i>
                                        </div>

                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                            <span>Learn More</span>

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

                <div class="col-lg-6 col-12">
                    <div class="services-thumb section-bg mb-lg-0">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="services-image-wrap">
                                    <a href="services_detail">
                                        <img src="{{asset('/assets/images/services/young-smiling-woman-wearing-rubber-gloves-cleaning-stove.jpg')}}" class="services-image img-fluid" alt="">
                                        <img src="{{asset('/assets/images/services/woman-holding-rag-detergent-cleaning-cooker.jpg')}}" class="services-image services-image-hover img-fluid" alt="">

                                        <div class="services-icon-wrap">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-white mb-0">
                                                    <i class="bi-cash me-2"></i>
                                                    $640
                                                </p>

                                                <p class="text-white mb-0">
                                                    <i class="bi-clock-fill me-2"></i>
                                                    4 hrs
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                    <h4 class="services-title mb-1 mb-lg-2">
                                        <a class="services-title-link" href="services_detail">Kitchen Cleaning</a>
                                    </h4>

                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>

                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                            <span>Learn More</span>

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

            </div>
        </div>
    </section>


    <section class="services-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="services-thumb mb-lg-0">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="services-image-wrap">
                                    <a href="services_detail">
                                        <img src="{{asset('/assets/images/services/man-polishing-car-inside-car-service.jpg')}}" class="services-image img-fluid" alt="">
                                        <img src="{{asset('/assets/images/services/man-polishing-car-inside.jpg')}}" class="services-image services-image-hover img-fluid" alt="">

                                        <div class="services-icon-wrap">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-white mb-0">
                                                    <i class="bi-cash me-2"></i>
                                                    $240
                                                </p>

                                                <p class="text-white mb-0">
                                                    <i class="bi-clock-fill me-2"></i>
                                                    2 hrs
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                    <h4 class="services-title mb-1 mb-lg-2">
                                        <a class="services-title-link" href="services_detail">Car Washing</a>
                                    </h4>

                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>

                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                            <span>Learn More</span>

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

                <div class="col-lg-6 col-12">
                    <div class="services-thumb mb-lg-0">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="services-image-wrap">
                                    <a href="services_detail">
                                        <img src="{{asset('/assets/images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg')}}" class="services-image img-fluid" alt="">
                                        <img src="{{asset('/assets/images/services/close-up-mop-cleaning-industrial-plant-floor.jpg')}}" class="services-image services-image-hover img-fluid" alt="">

                                        <div class="services-icon-wrap">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-white mb-0">
                                                    <i class="bi-cash me-2"></i>
                                                    $6,800
                                                </p>

                                                <p class="text-white mb-0">
                                                    <i class="bi-clock-fill me-2"></i>
                                                    30 hrs
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                    <h4 class="services-title mb-1 mb-lg-2">
                                        <a class="services-title-link" href="services_detail">Factory Cleaning</a>
                                    </h4>

                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="reviews-icons">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>

                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                            <span>Learn More</span>

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

            </div>
        </div>
    </section>


    <section class="partners-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-12 col-12">
                    <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{asset('/assets/images/partners/toprak-leasing.svg')}}" class="partners-image img-fluid">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{asset('/assets/images/partners/glorix.svg')}}" class="partners-image img-fluid">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{asset('/assets/images/partners/woocommerce.svg')}}" class="partners-image img-fluid">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{asset('/assets/images/partners/rolf-leasing.sv')}}g" class="partners-image img-fluid">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{asset('/assets/images/partners/unilabs.sv')}}g" class="partners-image img-fluid">
                </div>

            </div>
        </div>
    </section>
@endsection
