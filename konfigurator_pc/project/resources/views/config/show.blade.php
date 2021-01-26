@extends('layouts.app')

@section('header')
    <a href="{{url()->previous()}}" class="bg-gray-500 h-8 w-8 text-center inline-block rounded-full p-2 mx-8 absolute bottom-3 left-0"><img class="w-4 h-4 fill-current" src="/img/back.svg" alt="Back"></a>
    Viewing a PC configuration
@endsection


@section('body')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="m-4">
                        <h2 class="text-2xl m-2">
                            {{$config->title}}
                        </h2>
                        <p>
                            @markdown
                            {{$config->desc}}
                            @endmarkdown
                        </p>
                    </div>

                    @if(!$config->public)
                        <div class="text-white bg-gray-600 rounded py-2 px-4 inline-block">
                            <i class="fas fa-user-secret"></i>
                            Private
                        </div>
                    @endif

                    @if($config->is_verified == true)
                        <div class="text-white bg-gray-600 rounded py-2 px-4 inline-block">
                            <i class="fas fa-check"></i>
                            Verified
                        </div>
                    @endif

                    @if($config->benchmark != 0)
                        <div class="text-white bg-gray-600 rounded py-2 px-4 inline-block">
                            <i class="fas fa-tachometer-alt"></i>
                            Benchmark: {{$config->benchmark}}
                        </div>
                    @endif
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @empty ($config)
                        <p>Error.</p>
                    @else
                        <div class='py-10'>
                            <div>
                                @foreach($config->componentNames as $key => $value)
                                    <x-component-details :component="$config->$key" action="list" :comp="$key" />
                                @endforeach
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if($owner)
                                <a href="{{route('config.edit', $config->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit') }}</a>
                                <form action="{{ route('config.destroy', $config->id) }}" method="POST">

                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <x-button class="btn btn-danger m-1">Delete</x-button>
                                </form>

                                @if(!$config->public)
                                    <a href="{{route('configPublish', $config->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Publish') }}</a>
                                @endif
                                <a href="{{route('configShareUrl', $config)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Share Url') }}</a>
                            @endif
                            @if($user->user_type == 'admin')
                                <a href="{{route('configVerify', $config)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ $config->is_verified ? __('Unverify') : __('Verify') }}</a>
                                <a href="{{route('benchmarkIndex', $config)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Benchmark') }}</a>
                            @endif


                        </div>
                    @endempty
                </div></div>
        </div>
    </div>
@endsection

