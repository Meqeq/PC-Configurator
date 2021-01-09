@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Benchmark
    </h2>
@endsection

@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($config->benchmark == 0)
                        <p class="p-6">No benchmark in database.</p>
                        <div class="flex items-center justify-end mt-4 px-4 pb-5">
                            <form method="get" action="{{ route('benchmarkCreate', $config) }}">
                                <x-button class="ml-4">
                                    {{ __('Create new...') }}
                                </x-button>
                            </form>
                        </div>
                    @else
                        <li>
                            <a> Benchmark for this cfg: {{ $config->benchmark }}</a>
                        </li>
                        <div class="flex items-center justify-end mt-4 px-4 pb-5">
                            <form method="get" action="{{ route('benchmarkEdit', $config) }}">
                                <x-button class="ml-4">
                                    {{ __('Edit...') }}
                                </x-button>
                            </form>
                        </div>
                        <div class="flex items-center justify-end mt-4 px-4 pb-5">
                            <form method="post" action="{{ route('benchmarkDestroy', $config) }}">
                                @csrf
                                @method('DELETE')
                                <x-button class="ml-4">
                                    {{ __('Delete') }}
                                </x-button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

