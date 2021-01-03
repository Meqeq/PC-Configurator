@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        New PC Configuration
    </h2>
@endsection

@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="box">
                    <div class="col-lg-12">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" class="p-4" action="/config">
                            @csrf

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <x-label for="cpu" :value="__('CPU')" />

                                    <x-input id="cpu" class="block mt-1 w-full" type="text" name="cpu" :value="old('cpu')" autofocus />
                                </div>
                                <div>
                                    <x-label for="cpu_id" :value="__('cpu_id')" />

                                    <x-input id="cpu_id" class="block mt-1 w-full" type="text" name="cpu_id" :value="old('cpu_id')" autofocus />
                                </div>
                                <div>
                                    <x-label for="cpu_id" :value="__('cpu_id')" />

                                    <x-input id="cpu_id" class="block mt-1 w-full" type="text" name="cpu_id" :value="old('cpu_id')" autofocus />
                                </div>
                                <div>
                                    <x-label for="cpu_id" :value="__('cpu_id')" />

                                    <x-input id="cpu_id" class="block mt-1 w-full" type="text" name="cpu_id" :value="old('cpu_id')" autofocus />
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button >
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

