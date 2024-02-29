@seoTitle(__('Редактировать соц-сеть'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование соц-сети') }}
            </h2>
            <a href="{{ route('socials.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К соц-сетей') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('socials.update', $social->id)}}" :default="$social">
                <x-splade-input name="link" label="{{__('Ссылка на соц-сеть')}}" placeholder="{{__('vk.com/ваша соц-сеть')}}"/>
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение продукта')}}"/>
                <img class="max-w-[150px] rounded-md max-h-[150px] mt-[15px] mb-[15px]" src="{{Storage::url($social->image)}}" alt="">
                <x-splade-select name="isActive" label="{{__('Статус продукта')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
