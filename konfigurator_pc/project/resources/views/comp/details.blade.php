@extends('layouts.app')

@section('header')
    Details
@endsection

@section('body')
    <div class="p-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/4 p-4">
                <img src="{{$data['img']}}" alt="Img">
            </div>
            <div class="w-full lg:w-3/4 p-4">
                <h2 class="text-2xl m-4">{{$data['name']}}</h2>
                <p>
                    {{$data['desc']}}
                </p>
            </div>
        </div>
            <a href="{{url()->previous()}}" class="block p-4 mx-auto w-3/5 rounded bg-blue-100 text-center">
                {{ __('Back') }}
            </a>
        </div>
    </div>
@endsection