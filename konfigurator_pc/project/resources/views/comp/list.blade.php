@extends('layouts.app')

@section('header')
    <a href="/config/create" class="bg-gray-500 h-8 w-8 text-center inline-block rounded-full p-2 mx-8 absolute bottom-3 left-0"><img class="w-4 h-4 fill-current" src="/img/back.svg" alt="Back"></a>
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
                <div class="flex p-2 border-b border-gray-200 hover:bg-gray-50">
                    <div class="w-2/12">
                        <img src="{{$component['img']}}" alt="Img">
                    </div>
                    <div class="w-8/12 px-4">
                        <h4 class="name text-xl">{{$component['name']}}</h4>
                        <div class="flex flex-col flex-wrap h-16">
                            @if($component['socket'])
                                <div class="socket">Socket: {{$component['socket']}}</div>
                            @endif
                            @if($component['frequency'])
                                <div class="frequency">Frequency: {{$component['frequency']}} Mhz</div>
                            @endif
                            @if($component['cores'])
                                <div class="cores">Cores: {{$component['cores']}}</div>
                            @endif
                            @if($component['RAM'])
                                <div class="ram">Memory: {{$component['RAM']}} GB</div>
                            @endif
                            @if($component['size'])
                                <div class="size">Size: {{$component['size']}}</div>
                            @endif
                            @if($component['speed'])
                                <div class="speed">Speed: {{$component['speed']}} Mhz</div>
                            @endif
                            @if($component['type'])
                                <div class="type">Type: {{$component['type']}}</div>
                            @endif
                            @if($component['capacity'])
                                <div class="capacity">Capacity: {{$component['capacity']}} GB</div>
                            @endif
                            @if($component['interface'])
                                <div class="capacity">Interface: {{$component['interface']}}</div>
                            @endif
                            @if($component['power'])
                                <div class="power">Power: {{$component['power']}} W</div>
                            @endif
                        </div>
                    </div>
                    <div class="w-2/12 flex flex-col justify-center">
                        <a class="bg-indigo-300 hover:bg-indigo-600 text-white font-bold w-20 py-2 rounded m-2 text-center"
                            href="{{ route('componentDetails', [ 'comp' => $comp, 'action' => $action, 'id' => $component->id ]) }}"
                        >
                            Details
                        </a>
                        @if($action == 'select')
                            <a class="bg-indigo-300 hover:bg-indigo-600 text-white font-bold w-20 py-2 rounded m-2 text-center"
                                href="{{ route('componentPick', [ 'comp' => $comp, 'action' => 'pick', 'id' => $component->id ]) }}"
                            >
                                Pick
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                No components
            @endforelse
        </div>
    </div>
@endsection
