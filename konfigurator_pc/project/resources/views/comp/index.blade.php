@extends('layouts.app')

@section('header')
    Select type of component
@endsection

@section('body')
    <div class="m-2 p-4 flex justify-center flex-wrap">
        @foreach($config->componentNames as $key => $value)
            <a href="{{ route('componentList', array_merge($config->compatibleSpec($key), ['action' => 'list', 'comp' => $key])) }}">
                <div class="w-52 p-2 hover:shadow">
                    <div class="bg-gray-400 w-full h-40 flex justify-center">
                        <img style="max-width: 100%;padding: 10px;max-height: 100%;" src="/img/{{$key}}.svg" alt="{{$key}} image">
                    </div>
                    <div class="text-center leading-10 bg-gray-100">
                        {{$value}}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
