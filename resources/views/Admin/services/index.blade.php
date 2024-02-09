@seoTitle(__('Услуги'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Услуги') }}</h2>
            <a href="{{ route('services.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая услуга') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$services">
                @cell('image', $services)
                    <img class="max-w-[35px] rounded-full min-h-[35px] max-h-[35px] " src="{{Storage::url($services->image)}}" alt="Изображение услуги">
                @endcell
                @cell('action', $services)
                    <div class="flex gap-3">
                        <Link href="{{ route('services.destroy', $services->id) }}" class="" confirm="Внимание" confirm-text="Вы действительно хотите удалить запись?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                        <Link href="{{ route('services.edit', $services->id) }}" class="" >{{__('Редактировать')}}</Link>
                    </div>
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

