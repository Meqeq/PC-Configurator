@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editing user
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
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full" type="text" name="password" autofocus />
                                </div>

                                <div>
                                    <x-label for="confirm_password" :value="__('Confirm password')" />

                                    <x-input id="confirm_password" class="block mt-1 w-full" type="text" name="confirm_password" autofocus />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" autofocus />
                                </div>
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                                </div>

                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button >
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

