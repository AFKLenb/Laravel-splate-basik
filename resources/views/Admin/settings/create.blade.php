@seoTitle(__('Новый продукт'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая настройка') }}
            </h2>
            <a href="{{ route('settings.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку настроек') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('settings.store')}}">
                <x-splade-input name="name" label="{{__('Название компании')}}" placeholder="{{__('Lethal company')}}"/>
                <x-splade-input name="address" label="{{__('Адрес компании')}}" placeholder="{{__('улица пушкина')}}"/>
                <x-splade-input name="phone_number" label="{{__('Телефон компании')}}" placeholder="{{__('89953487654')}}"/>
                <x-splade-input name="email" label="{{__('Почта компании')}}" placeholder="{{__('sigma@gmail.com')}}"/>
                <x-splade-textarea name="schedule" label="{{__('График работы')}}" placeholder="{{__('5 на 2')}}"/>
                <x-splade-file name="logo" :show-filename="false" preview label="{{__('Лого компании')}}"/>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
