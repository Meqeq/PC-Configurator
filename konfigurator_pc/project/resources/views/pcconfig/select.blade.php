<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SELECT TEST
        </h2>
    </x-slot>

    <form class="bg-white m-2 shadow">
        <div class="flex justify-center">
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

            <div class="flex flex-col justify-center">
                <input type="submit" value="Filter" class="w-16 h-10 m-1"/>
                <input type="reset" value="Reset" class="w-16 h-10 m-1" />
            </div>
        </div>

        
    </form>
    <div class="m-2 bg-white text-center shadow">
        @forelse($data as $component) 
            <p class="name">{{$component['name']}}</p>
            <p class="socket">{{$component['socket']}}</p>
            <p class="frequency">{{$component['frequency']}}</p>
            <p class="cores">{{$component['cores']}}</p>
        @empty
            No components
        @endforelse
    </div>
</x-app-layout>