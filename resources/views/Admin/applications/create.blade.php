@seoTitle(__('Новая заявка'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая категория') }}
            </h2>
            <a href="{{ route('applications.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('applications.store')}}" >
                <x-splade-input name="name" label="{{__('ФИО')}}" placeholder="{{__('Алеша')}}"/>
                <x-splade-input class="mt-5" name="number" label="{{__('Номер телефона')}}" placeholder="{{__('+8-(800)-555-35-35')}}"/>
                <x-splade-input class="mt-5" name="email" label="{{__('Электронная почта')}}" placeholder="{{__('niggaballs@gmail.com')}}"/>
                <x-splade-input date class="mt-5" name="date" label="{{__('Дата заявки')}}" placeholder="{{__('21.10.2024')}}"/>
                <x-splade-input date class="mt-5" name="dateCreate" label="{{__('Дата заявки')}}" placeholder="{{__('21.10.2024')}}"/>
                <x-splade-select name="isType" label="{{__('Тип помещения')}}">
                    <option value="0">{{__('Квартира')}}</option>
                    <option value="1">{{__('Дом')}}</option>
                </x-splade-select>
                <x-splade-select name="isStatus" label="{{__('Статус заявки')}}">
                    <option value="0">{{__('Ожидание')}}</option>
                    <option value="1">{{__('Принята')}}</option>
                    <option value="2">{{__('Выполнено')}}</option>
                    <option value="3">{{__('Отклонена')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
