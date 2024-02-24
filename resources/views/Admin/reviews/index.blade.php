@seoTitle(__('Отзывы'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Отзывы') }}</h2>
            <a href="{{ route('reviews.create') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый отзыв') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$reviews">
                @cell('text', $reviews)
                    <p class="max-w-[250px] overflow-x-auto">{{$reviews->text}}</p>
                @endcell
                @cell('rating', $reviews)
                    @if($reviews->rating == 1)
                        <div class="alert alert-danger text-center">
                            {{ __('⭐️') }}
                        </div>
                    @elseif($reviews->rating == 2)
                        <div class="alert alert-danger text-center">
                            {{ __('⭐️⭐️') }}
                        </div>
                    @elseif($reviews->rating == 3)
                        <div class="alert alert-warning text-center">
                            {{ __('⭐️⭐️⭐️') }}
                        </div>
                    @elseif($reviews->rating == 4)
                        <div class="alert alert-success text-center">
                            {{ __('⭐️⭐️⭐️⭐️') }}
                        </div>
                    @elseif($reviews->rating == 5)
                        <div class="alert alert-success text-center">
                            {{ __('⭐️⭐️⭐️⭐️⭐️') }}
                        </div>
                    @endif
                @endcell
                @cell('image', $reviews)
                    <img class="max-w-[35px] rounded-full max-h-[35px] mt-[15px] mb-[15px]" src="{{Storage::url($reviews->image)}}" alt="">
                @endcell
                @cell('action', $reviews)
                    <div class="flex gap-3">
                        <Link href="{{ route('reviews.destroy', $reviews->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" confirm="Внимание" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                        <Link href="{{ route('reviews.edit', $reviews->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Редактировать')}}</Link>
                        <Link href="{{ route('reviews.show', $reviews->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Подробнее')}}</Link>
                    </div>
                @endcell
                @cell('isActive', $reviews)
                    @if($reviews->isActive == 0)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Не активна') }}
                        </div>
                    @elseif($reviews->isActive == 1)
                        <div class="bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Активна') }}
                        </div>
                    @endif
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

