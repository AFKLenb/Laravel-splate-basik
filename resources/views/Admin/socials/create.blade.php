@seoTitle(__('Новая соц-сеть'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая соц-сеть') }}
            </h2>
            <a href="{{ route('socials.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К соц-сетей ') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form action="{{route('socials.store')}}">
                <x-splade-input name="link" label="{{__('Ссылка на соц-сеть')}}" placeholder="{{__('vk.com/ваша соц-сеть')}}"/>
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение соц-сети')}}"/>
                <img class="max-w-[250px] rounded-md max-h[200px] mt-[15px] mb-[15px]" v-if="form.image" :src="form.$fileAsUrl('image')" />
                <x-splade-select name="isActive" label="{{__('Статус соц-сети')}}">
                    <option value="0">{{__('Не активена')}}</option>
                    <option value="1">{{__('Активена')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
