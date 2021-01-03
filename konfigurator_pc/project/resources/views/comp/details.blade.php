@extends('layouts.app')

@section('header')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Details
    </h2>

@endsection

@section('body')
    <div class="m-2 p-2 bg-white shadow">
        <h3>{{$data['name']}}</h3>
        @markdown
            {{$data['desc']}}
        @endmarkdown
        Tu jakieś informacje
    </div>
@endsection
