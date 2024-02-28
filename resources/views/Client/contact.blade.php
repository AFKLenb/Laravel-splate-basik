@extends('Client.layout.layout')
@section('title') {{__('Контакты')}}@endsection
@section('content')
    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Contact</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                    <h2 class="my-3">We're happy to help</h2>

                    <p>Best Cleaning Service is ready to serve you. Clean Work is a professional website layout for your business.</p>

                    <div class="contact-info bg-white shadow-lg">
                        <h3 class="mb-4">Contact Information</h3>

                        <h5 class="d-flex mt-3 mb-3">
                            <i class="bi-geo-alt-fill custom-icon me-3"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </h5>

                        <h5 class="d-flex mb-3">
                            <i class="bi-telephone-fill custom-icon me-3"></i>

                            <a href="tel: 110-220-9800">
                                110-220-9800
                            </a>
                        </h5>

                        <h5 class="d-flex">
                            <i class="bi-envelope-fill custom-icon me-3"></i>

                            <a href="mailto:info@company.com">
                                info@company.com
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-6 col-12">

                    <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action="{{route('client.FitbackStore')}}" method="post" role="form">
                        @csrf
                        <div class="consulting-form-header d-flex align-items-center">
                            <h3 class="mb-4">Оставить заявку</h3>
                        </div>

                        <div class="consulting-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Artem white" required>
                                    <input type="date" name="dateCreate"   class="form-control" placeholder="{{__('21.10.2024')}}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="number"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="sigma@gmail.com" required>
                                    </div>
                            </div>

                            <select class="form-select form-control"  name="isType"  aria-label="Default select example">
                                <option value="0">{{__('Квартира')}}</option>
                                <option value="1">{{__('Дом')}}</option>
                            </select>

                            <textarea name="email" rows="3" class="form-control"  placeholder="Коментарий"></textarea>

                            <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
