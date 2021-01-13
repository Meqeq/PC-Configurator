@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        New PC Configuration
    </h2>
@endsection


@section('body')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form method="POST" action="{{ route('config.store') }}" class="bg-white flex-col justify-center m-2 p-2 shadow">
        @csrf
        <div class="flex justify-center mb-3 pt-0">
            <input name="title" type="text" placeholder="Title" required :value="old('title')"
                   class="text-xl px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-1/2"/>
        </div>
        <div class="flex justify-center mb-3 pt-0">
            <textarea name="desc" placeholder="Description" :value="old('desc')"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-1/2"></textarea>
        </div>
        <div class="flex justify-center flex-wrap">
            @foreach([
'cpu' => 'CPU', 'mb' => 'Motherboard', 'gpu' => 'GPU', 'ram' => 'RAM',
'psu' => 'Power supply', 'drive' => 'Storage',
'case' => 'Case', 'cooling' => 'Cooling'
] as $key => $value)
                <a href="{{ route('componentList', [ 'comp' => $key, 'type' => 'select' ]) }}">
                    <div class="w-52 h-52 p-2 hover:shadow">
                        <div class="bg-gray-400 w-full h-40">
                            @if(isset($config->$key))
                                <div class="myChosenElement text-center h-8 leading-10 bg-gray-100">
                                    {{$config->$key->name}}
                                </div>
                            @endif
                        </div>
                        <div class="text-center h-8 leading-10 bg-gray-100">
                            {{$value}}
                        </div>
                        <?php //xdebug_break(); ?>
                        
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center">
            <button id="createBtn" disabled
                    class="m-6 w-1/2 h-14 px-6 text-indigo-100 transition-colors duration-150 bg-gray-400 rounded-lg focus:shadow-outline">{{ __('Create') }}</button>
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
