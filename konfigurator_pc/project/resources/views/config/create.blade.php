@extends('layouts.app')

@section('header')
    New PC Configuration
@endsection


@section('body')
    <form method="POST" action="{{ route('config.store') }}" class="flex-col justify-center m-2 p-2">
        @csrf
        <div class="flex justify-center mb-3 pt-0">
            <input name="title" type="text" placeholder="Title" required :value="old('title')"
                   class="text-xl px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-1/2"/>
        </div>
        <div class="flex justify-center mb-3 pt-0">
            <textarea name="desc" placeholder="Description" :value="old('desc')"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-1/2"></textarea>
        </div>
        @if (count($compatibilityErrors))
            <div class="alert alert-danger text-center text-red-600 font-bold">
                <ul>
                    @foreach ($compatibilityErrors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex justify-center flex-wrap">
            @foreach($config->componentNames as $key => $value)
                <a href="{{ route('componentList', array_merge($config->compatibleSpec($key), ['action' => 'select', 'comp' => $key])) }}">
                    <div class="w-52 p-2 hover:shadow">
                        <div class="w-full h-40 flex justify-center relative">
                            @if(isset($config->$key))
                                <div class="myChosenElement text-center bg-gray-50 absolute bottom-0 w-full opacity-75">
                                    {{$config->$key->name}}
                                </div>
                                <img style="max-width: 100%;padding: 10px;max-height: 100%;" src="{{$config->$key->img}}" alt="{{$key}} image">
                            @else
                                <img style="max-width: 100%;padding: 10px;max-height: 100%;" src="/img/{{$key}}.svg" alt="{{$key}} image">
                            @endif
                        </div>
                        <div class="text-center leading-10 bg-gray-100">
                            {{$value}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center">
            <button id="createBtn" disabled
                    class="m-6 w-1/2 h-14 px-6 text-indigo-100 transition-colors duration-150 bg-gray-400 rounded-lg focus:shadow-outline">{{ __('Create new PC configuration') }}</button>
        </div>
    </form>

    <script>
        const chosenElements = document.getElementsByClassName("myChosenElement");
        if (chosenElements.length === 8) {
            const createBtn = document.getElementById("createBtn");
            createBtn.classList.remove("bg-gray-400");
            createBtn.classList.add("bg-indigo-600", "hover:bg-indigo-800")
            createBtn.disabled = false;
        }
    </script>
@endsection
