@extends('layouts.app')

@section('header')
    <a href="{{url()->previous()}}" class="bg-gray-500 h-8 w-8 text-center inline-block rounded-full p-2 mx-8 absolute bottom-3 left-0"><img class="w-4 h-4 fill-current" src="/img/back.svg" alt="Back"></a>
    <span class="align-top">
        @if($action == 'select')
            Pick component for your config
        @else
            List of components
    @endif
    </span>

@endsection

@section('body')
    <div class="flex">
        <div class="w-3/12 p-2">
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
                <div class="flex justify-center">
                    <input type="submit" value="Filter" class="w-16 h-10 m-1 bg-gray-200"/>
                    <a href="{{url()->current()}}" class="w-16 h-10 m-1 bg-gray-200 p-2 text-center">Reset</a>
                </div>
            </form>
        </div>
        <div class="w-9/12 p-2 px-4 mx-4">
            @forelse($data as $component)
                <x-component-details :component="$component" :action="$action" :comp="$comp" />
            @empty
                No components
            @endforelse
        </div>
    </div>
@endsection
