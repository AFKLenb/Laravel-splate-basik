@seoTitle(__('Редактировать услугу'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование партнёра') }} {{$casee->id}}
            </h2>
            <a href="{{ route('casees.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку партнёров') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('casees.update', $casee->id)}}" :default="$casee">
{{--                <x-splade-input name="title" label="{{__('Название услуги')}}" placeholder="{{__('Есть пробитие')}}"/>--}}
{{--                <x-splade-textarea class="mt-5" name="description" label="{{__('Описание услуги')}}" placeholder="{{__('Пробитие туза')}}"/>--}}
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение услуги')}}"/>
{{--                <x-splade-input name="price" label="{{__('Цена услуги')}}" placeholder="{{__('Смысла нет')}}"/>--}}
                <x-splade-select name="isActive" label="{{__('Статус партнёра')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
