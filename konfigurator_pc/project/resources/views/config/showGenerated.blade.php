@extends("layouts.app")

@section("header")
    Generated config
@endsection

@section("body")
    <div class="mt-8 bg-white dark:bg-gray-800">
        @if (!empty($configs))
            <h3 class="text-xxl text-gray-500">Generated components:</h3>
            <div class="my-6">
                @foreach($configs->componentNames as $key => $value)
                    <x-component-details :component="$configs->$key" action="list" :comp="$key" />
                @endforeach
            </div>
            <div class="w-60 mx-auto text-center bg-gray-200 text-2xl p-2 rounded m-4">
                Total: {{$configs->price}} zł
            </div>
            <a href="{{route('config.create')}}">
                <div class="w-60 mx-auto text-center bg-blue-200 text-2xl p-2 rounded m-4">
                    Save this config
                </div>
            </a>
        @endif
    </div>

@endsection
