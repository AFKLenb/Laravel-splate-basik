@seoTitle(__('Соц-сети'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Соц-сети') }}</h2>
            <a href="{{ route('socials.create') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая соц-сеть') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$socials">
                @cell('image', $socials)
                    <img class="max-w-[35px] rounded-full max-h-[35px] mt-[15px] mb-[15px]" src="{{Storage::url($socials->image)}}" alt="">
                @endcell
                @cell('isActive', $socials)
                    @if($socials->isActive == 0)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Не активна') }}
                        </div>
                    @elseif($socials->isActive == 1)
                        <div class="bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Активна') }}
                        </div>
                    @endif
                @endcell
                @cell('action', $socials)
                <div class="flex gap-3">
                    <Link href="{{ route('socials.destroy', $socials->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" confirm="Внимание" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                    <Link href="{{ route('socials.edit', $socials->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Редактировать')}}</Link>
                    </div>
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

