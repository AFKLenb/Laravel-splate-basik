@seoTitle(__('Редактировать услугу'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование продукта') }} {{$partner->title}}
            </h2>
            <a href="{{ route('partners.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку услуг') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('partners.update', $partner->id)}}" :default="$partner">
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение продукта')}}"/>
                <img class="max-w-[150px] rounded-md max-h-[150px] mt-[15px] mb-[15px]" src="{{Storage::url($partner->image)}}" alt="">
                <x-splade-select name="isActive" label="{{__('Статус продукта')}}">
                    <option value="0">{{__('Не активен')}}</option>
                    <option value="1">{{__('Активен')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
