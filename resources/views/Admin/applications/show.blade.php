@seoTitle(__($application->name))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{$application->name}}</h2>
            <a href="{{ route('products.index') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку продуктов') }}</a>
        </div>
        </x-slot>
        <div class="flex justify-between  my-4 p-4 rounded-md max-w-[1240px] mx-auto bg-white">
            <div class="flex gap-[80px]  items-top  p-[15px]">
                <div class="flex flex-col items-start justify-between">
                    <div class=" w-full items-center">
                        <h3 class="text-[24px] mb-[20px] mr-[20px]">{{$application->name}}</h3>
                        <p class="text-[20px] whitespace-normal ">Номер: {{$application->number}}</p>
                    </div>
                    <div class="mt-[30px]">
                        <p class="text-[18px] whitespace-normal ">{{$application->email}}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between p-[15px]">
                <p class="">Дата оставления заявки: <br> {{$application->date}}</p>
                <p class="">Дата выполнения заявки: <br> {{$application->dateCreate}}</p>

            </div>
        </div>
</x-app-layout>

