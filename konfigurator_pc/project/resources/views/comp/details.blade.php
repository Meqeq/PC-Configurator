<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Details
        </h2>
    </x-slot>
    <div class="m-2 p-2 bg-white shadow">
        <h3>{{$data['name']}}</h3>
        @markdown
            {{$data['desc']}}
        @endmarkdown
        Tu jakieś informacje
    </div>
</x-app-layout>