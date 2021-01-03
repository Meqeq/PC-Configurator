@extends('layouts.app')

@section('header')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
                    <div class="w-20 h-20 bg-gray-400">
        
                    </div>
                    <div class="mx-4">
                        <h4 class="name">{{$component['name']}}</h4>
                        <p class="socket">{{$component['socket']}}</p>
                        <p class="frequency">{{$component['frequency']}}</p>
                        <p class="cores">{{$component['cores']}}</p>
                    </div>
                    <div class="w-20">
                        <a 
                            href="{{ route('componentDetails', [ 'comp' => $comp, 'type' => $type, 'id' => $component->id ]) }}"
                        >
                            Details
                        </a>
                        @if($type == 'select')
                            <a 
                                href="{{ route('componentDetails', [ 'comp' => $comp, 'type' => $type, 'id' => $component->id ]) }}"
                            >Pick</a>
                        @endif
                    </div>
                </div>
            @empty
                No components
            @endforelse
        </div>
    </div>
@endsection
