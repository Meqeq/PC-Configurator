@extends('layouts.app')

@section('header')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>

@endsection

@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <p>{{$user->name}}</p>
                    <p>{{$user->email}}</p>
                    @foreach( $configs as $config)
                        <p>{{$config->cpu_id}}</p>
                    @endforeach

                    @if($owner)
                    <a href="{{route('user.edit', $user->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
