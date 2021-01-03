@extends('layouts.app')

@section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of PC configurations
        </h2>
@endsection

@section('body')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($configs) === 0)
                        <p>PC configs not found :(</p>
                    @else
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Price</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Description</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                <th class="border-b-2 border-gray-300"></th>
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
                                    <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <a href="{{route('config.show', ['config' => $config->id])}}" class=""><img src="/img/star-unchecked.png" alt="Add to favourite"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <a href="/pcconfig/create" style="margin:8px" name="Create" class="bg-purple-600 float-right focus:outline-none focus:ring-2 focus:ring-opacity-75 focus:ring-purple-400 font-semibold hover:bg-purple-800 px-4 py-2 rounded-lg shadow-md text-white">Create new...</a>
            </div>
        </div>
    </div>

@endsection

