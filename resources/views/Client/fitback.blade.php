@extends('Client.layout.layout')
@section('title') {{__('Заявка')}}@endsection
@section('content')
    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Fitback</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Page 404</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <x-splade-form action="{{route('client.FitbackStore')}}" >
                        <x-splade-input name="name" label="{{__('ФИО')}}" placeholder="{{__('Алеша')}}"/>
                        <x-splade-input class="mt-5" name="number" label="{{__('Номер телефона')}}" placeholder="{{__('+8-(800)-555-35-35')}}"/>
                        <x-splade-input class="mt-5" name="email" label="{{__('Сообщение')}}" placeholder="{{__('Ваш текст ')}}"/>
                        <x-splade-input date class="mt-5" name="dateCreate" label="{{__('Дата проведения работ')}}" placeholder="{{__('21.10.2024')}}"/>
                        <x-splade-select name="isType" label="{{__('Тип помещения')}}">
                            <option value="0">{{__('Квартира')}}</option>
                            <option value="1">{{__('Дом')}}</option>
                        </x-splade-select>
                        <x-splade-submit label="Отправить" class="mt-3"/>
                    </x-splade-form>
                </div>

            </div>
        </div>
    </section>
@endsection
