@extends('layouts.app')

@section('header')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-gray-700 transition-colors duration-150 bg-white rounded-full focus:shadow-outline hover:bg-gray-200">
            <a href="/config/create"><img class="w-4 h-4 fill-current" src="/img/back.svg" alt="Back"></a>
        </button>
        @if($type == 'select')
            Pick component for your config
        @else
            List of components
        @endif
    </h2>

@endsection

@section('body')
    <div class="flex">
        <div class="w-3/12 bg-white m-2 p-2 shadow">
            <form>
                @foreach ($configOptions as $option)
                    @switch($option['type'])
                        @case("checkbox")
                            <x-select-checkbox :values="$option['values']" :name="$option['name']" :display="$option['display']" />
                            @break
                        @case("radio")
                            <x-select-radio :values="$option['values']" :name="$option['name']" :display="$option['display']" />
                            @break
                        @case("range")
                            <x-select-range :name="$option['name']" :display="$option['display']" :min="$option['min']" :max="$option['max']" :step="$option['step']" />
                            @break
                    @endswitch
                @endforeach

                <input type="submit" value="Filter" class="w-16 h-10 m-1"/>
                <a href="{{url()->current()}}" class="w-16 h-10 m-1 bg-gray-100 p-2">Reset</a>
            </form>
        </div>
        <div class="w-9/12 bg-white m-2 p-8 shadow">
            @forelse($data as $component)
                <div class="hover:shadow flex p-2">
                    <div class="w-20 h-20 bg-gray-400 flex items-center justify-center">
                        <img src="XXX.jpng" alt="Img">
                    </div>
                    <div class="mx-4">
                        <h4 class="name">{{$component['name']}}</h4>
                        <p class="socket">{{$component['socket']}}</p>
                        <p class="frequency">{{$component['frequency']}}</p>
                        <p class="cores">{{$component['cores']}}</p>
                    </div>
                    <div class="w-20">
                        <a class="bg-indigo-300 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded"
                            href="{{ route('componentDetails', [ 'comp' => $comp, 'type' => $type, 'id' => $component->id ]) }}"
                        >
                            Details
                        </a>
                        @if($type == 'select')
                            <form method="POST" action="{{ route('componentDetails', [ 'comp' => $comp, 'type' => $type, 'id' => $component->id ]) }}">
                                @csrf
                                <input type="hidden" name="comp" value="{{$comp}}">
                                <input type="hidden" name="componentID" value="{{$component->id}}">
                                <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">{{ __('Pick') }}</button>
                            </form>
                        @endif
                    </div>
                </div>
            @empty
                No components
            @endforelse
        </div>
    </div>
@endsection
