@seoTitle(__($review->name))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{$review->name}}</h2>
            <a href="{{ route('reviews.index') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку отзывов') }}</a>
        </div>
        </x-slot>
        <div class="flex justify-between  my-4 p-4 rounded-md max-w-[1240px] mx-auto bg-white">
            <div class="flex gap-[80px]  items-top  p-[15px]">
                <div class="">
                    <img class="max-w-[400px] rounded-md max-h-[400px]" src="{{Storage::url($review->image)}}" alt="">
                </div>

                <div class="flex flex-col items-start justify-between">
                    <div class="">
                        <h3>{{$review->name}}</h3>
                        <p class="">{{$review->text}}</p>
                    </div>
                    <div class="flex gap-[20px]">
                        <p class="">Рейтинг:</p>
                        @if($review->rating == 1)
                            <div class="alert alert-danger text-center">
                                {{ __('⭐️') }}
                            </div>
                        @elseif($review->rating == 2)
                            <div class="alert alert-danger text-center">
                                {{ __('⭐️⭐️') }}
                            </div>
                        @elseif($review->rating == 3)
                            <div class="alert alert-warning text-center">
                                {{ __('⭐️⭐️⭐️') }}
                            </div>
                        @elseif($review->rating == 4)
                            <div class="alert alert-success text-center">
                                {{ __('⭐️⭐️⭐️⭐️') }}
                            </div>
                        @elseif($review->rating == 5)
                            <div class="alert alert-success text-center">
                                {{ __('⭐️⭐️⭐️⭐️⭐️') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between p-[15px]">
                @if($review->isActive == 0)
                    <div class=" bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                        {{ __('Не активен') }}
                    </div>
                @elseif($review->isActive == 1)
                    <div class="bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        {{ __('Активен') }}
                    </div>
                @endif
            </div>
        </div>
</x-app-layout>

