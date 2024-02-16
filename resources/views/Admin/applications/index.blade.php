@seoTitle(__('Заявки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Заявки') }}</h2>
            <a href="{{ route('applications.create') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая заявка') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$applications">
                @cell('action', $applications)
                    <div class="flex gap-3">
                        <Link href="{{ route('applications.destroy', $applications->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" confirm="Внимание" confirm-text="Вы действительно хотите удалить категорию?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                        <Link href="{{ route('applications.edit', $applications->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Редактировать')}}</Link>
                    </div>
                @endcell
                @cell('isType', $applications)
                    @if($applications->isType == 0)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Дом') }}
                        </div>
                    @elseif($applications->isType == 1)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Квартира') }}
                        </div>
                    @endif
                @endcell
                @cell('isStatus', $applications)
                    @if($applications->isStatus == 0)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Ожидание') }}
                        </div>
                    @elseif($applications->isStatus == 1)
                        <div class="bg-yellow-400 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Принята') }}
                        </div>
                    @elseif($applications->isStatus == 2)
                        <div class="bg-green-400 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Выполнена') }}
                        </div>
                    @elseif($applications->isStatus == 3)
                        <div class="bg-red-700 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Отклонена') }}
                        </div>
                    @endif
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

