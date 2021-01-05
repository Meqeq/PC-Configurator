@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        New PC Configuration
    </h2>
@endsection


    @section('body')
        <div class="bg-white flex-col justify-center m-2 p-2 shadow">
            <div class="flex justify-center">
                @foreach([
    'cpu' => 'CPU', 'mb' => 'Motherboard', 'gpu' => 'GPU',
    'psu' => 'Power supply', 'drive' => 'Storage',
    'case' => 'Case'
] as $key => $value)
                    <a href="{{ route('componentList', [ 'comp' => $key, 'type' => 'select' ]) }}">
                        <div class="w-52 h-52 p-2 hover:shadow">
                            <div class="bg-gray-400 w-full h-40">
                                @if(session()->has($key))
                                    <div class="text-center h-8 leading-10 bg-gray-100">
                                        {{session()->get($key)->name}}
                                    </div>
                                @endif
                            </div>
                            <div class="text-center h-8 leading-10 bg-gray-100">
                                {{$value}}
                            </div>
                            <?php xdebug_break(); ?>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <button disabled class="m-6 w-1/2 h-14 px-6 text-indigo-100 transition-colors duration-150 bg-gray-400 rounded-lg focus:shadow-outline">{{ __('Create') }}</button>
            </div>
        </div>
    @endsection

