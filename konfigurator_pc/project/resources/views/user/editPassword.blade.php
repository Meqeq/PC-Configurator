@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editing user password
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

                        <form method="POST" class="p-4" action="{{route('update', ['type' => 'password'])}}">
                            @csrf
                            @method('PATCH')

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <x-label for="current_password" :value="__('Current password')" />

                                    <x-input id="current_password" class="block mt-1 w-full" type="text" name="current_password" autofocus />
                                </div>
                                <div>
                                    <x-label for="new_password" :value="__('New password')" />

                                    <x-input id="new_password" class="block mt-1 w-full" type="text" name="new_password" autofocus />
                                </div>

                                <div>
                                    <x-label for="confirm_password" :value="__('Confirm password')" />

                                    <x-input id="confirm_password" class="block mt-1 w-full" type="text" name="confirm_password" autofocus />
                                </div>


                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button >
                                    {{ __('Confirm') }}
                                </x-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

