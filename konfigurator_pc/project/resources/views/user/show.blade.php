@extends('layouts.app')

@section('header')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile.') }}
        @if($owner)
            You're logged in!
        @endif
    </h2>

@endsection

@section('body')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold text-xl text-gray-500 leading-tight">
                        {{$user->name}}
                    </h1>
                    <br>

                    @if($owner)
                        <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            <a href="{{route('editEmail')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit email') }}</a>
                        </td>
                        <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            <a href="{{route('editPassword')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit password') }}</a>
                        </td>

                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($configs) === 0)
                        <p> No configs </p>
                    @else
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Price</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Description</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                @if($owner)
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                @endif
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($configs as $config)
                                {{--TODO--}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">{{ $config->price }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">{{ $config->desc }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <a href="{{route('config.show', ['config' => $config->id])}}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Details</a>
                                    </td>

                                    @if($owner)
                                        <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <a href="{{route('config.edit', $config->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Edit') }}</a>
                                        </td>
                                        @if($config->public == false)
                                        <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                            <a href="{{route('configPublish', $config->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">{{ __('Publish') }}</a>
                                        </td>
                                        @endif
                                    @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <a href="/config/create" style="margin:8px" name="Create" class="bg-purple-600 float-right focus:outline-none focus:ring-2 focus:ring-opacity-75 focus:ring-purple-400 font-semibold hover:bg-purple-800 px-4 py-2 rounded-lg shadow-md text-white">Create new...</a>
            </div>
        </div>
    </div>
@endsection
