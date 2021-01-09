@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Creating benchmark
    </h2>
@endsection

@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('benchmarkStore', $config) }}">
                        @csrf
                        <div class="flex justify-center mb-3 pt-0">
                            <input name="value" type="text" placeholder="Benchmark value" required :value="old('value')"
                                   class="text-xl px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-1/2"/>
                        </div>
                        <div class="flex justify-center">
                            <button id="createBtn"
                                    class="m-6 w-1/2 h-14 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-600 hover:bg-indigo-800 rounded-lg focus:shadow-outline">{{ __('Create') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
