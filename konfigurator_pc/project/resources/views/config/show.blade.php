@extends('layouts.app')

@section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Viewing a PC configuration
        </h2>
@endsection


@section('body')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl font-normal text-gray-800">Other</p>
                    <p class="text-l font-normal text-gray-800">Detailed information.</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @empty ($config)
                        <p>Error.</p>
                    @else
                        {{--                        TODO--}}
                        <div class='py-10'>
                            <div class="max-w-md mx-auto xl:max-w-5xl lg:max-w-5xl md:max-w-2xl bg-gray-700 max-h-screen shadow-2xl flex-row rounded relative">
                                <div class="p-2 bg-gray-600 text-blue-900 rounded-t">
                                    <h5 class="text-white text-2xl capitalize">{{ $config->cpu_id }}</h5>
                                    <h3 class="text-white text-l">{{ $config->cpu_id }}</h3>
                                </div>
                                <div class="p-2 w-full h-full overflow-y-auto text-gray-100">
                                    <p class="text-justify py-2">
                                        @markdown
                                        {{$config->cpu_id}}
                                        @endmarkdown
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{route('config.edit', $config->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit') }}</a>
                            <form action="{{ route('config.destroy', $config->id) }}" method="POST">

                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <x-button class="btn btn-danger m-1">Delete</x-button>
                            </form>
                            @if($user->user_type == 'admin')
                                <a href="{{route('configVerify', $config)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ $config->is_verified ? __('Unverify') : __('Verify') }}</a>
                            @endif
                        </div>
                    @endempty
                </div></div>
        </div>
    </div>
@endsection

