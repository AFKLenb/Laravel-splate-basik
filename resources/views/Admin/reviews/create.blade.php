@seoTitle(__('Новый продукт'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый отзыв') }}
            </h2>
            <a href="{{ route('reviews.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку отзывов') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('reviews.store')}}">
                <x-splade-input name="name" label="{{__('ФИО клиента')}}" placeholder="{{__('ФИО клиента')}}"/>
                <x-splade-textarea class="mt-5" name="text" label="{{__('Описание отзыва')}}" placeholder="{{__('текст отзыва')}}"/>
                <x-splade-select name="rating" label="{{__('Рейтинг отзыва')}}">
                    <option value="1">{{__('⭐️')}}</option>
                    <option value="2">{{__('⭐️⭐️')}}</option>
                    <option value="3">{{__('⭐️⭐️⭐️')}}</option>
                    <option value="4">{{__('⭐️⭐️⭐️⭐️')}}</option>
                    <option value="5">{{__('⭐️⭐️⭐️⭐️⭐️')}}</option>
                </x-splade-select>
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение отзыва')}}"/>
                <img class="max-w-[150px] rounded-md max-h-[150px] mt-[15px] mb-[15px]" src="{{Storage::url($review->image)}}" alt="">

                <x-splade-select name="isActive" label="{{__('Статус отзыва')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
