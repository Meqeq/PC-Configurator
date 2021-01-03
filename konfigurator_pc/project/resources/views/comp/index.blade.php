<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pick type of component
        </h2>
    </x-slot>
    <div class="m-2 p-2 bg-white shadow flex justify-center">
        @foreach([
            'cpu' => 'CPU', 'mb' => 'Motherboard', 'gpu' => 'GPU', 
            'psu' => 'Power supply', 'drive' => 'Storage',
            'case' => 'Case'
        ] as $key => $value)
            <a href="{{ route('componentList', [ 'comp' => $key, 'type' => 'list' ]) }}">
                <div class="w-52 h-52 p-2 hover:shadow">
                    <div class="bg-gray-400 w-full h-40">

                    </div>
                    <div class="text-center h-8 leading-10 bg-gray-100">
                        {{$value}}
                    </div>
                </div>    
            </a>
        @endforeach
    </div>
</x-app-layout>