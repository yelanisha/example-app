@extends('layouts.market')

@section('title', 'Sign up')
@section('content')
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Имя')" />
                <x-text-input id="name" class="block mt-1 w-full comm_input" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 comm_input" />
            </div>

            <div>
                <x-input-label for="lname" :value="__('Фамилия')" />
                <x-text-input id="lname" class="block mt-1 w-full comm_input" type="text" name="lname"
                    :value="old('lname')" required autofocus autocomplete="lname" />
                <x-input-error :messages="$errors->get('lname')" class="mt-2 comm_input" />
            </div>

            <div>
                <x-input-label for="pname" :value="__('Отчество')" />
                <x-text-input id="pname" class="block mt-1 w-full comm_input" type="text" name="pname"
                    :value="old('pname')" autofocus autocomplete="pname" />
                <x-input-error :messages="$errors->get('pname')" class="mt-2 comm_input" />
            </div>

            <div>
                <x-input-label for="login" :value="__('Log in')" />
                <x-text-input id="login" class="block mt-1 w-full comm_input" type="text" name="login"
                    :value="old('login')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('login')" class="mt-2 comm_input" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full comm_input" type="email" name="email"
                    :value="old('email')" required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full comm_input" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full comm_input" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="block mt-4">
                <label for="agree" class="inline-flex items-center">
                    <input id="agree" type="checkbox"
                        class="comm_input rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember" required>
                    <span
                        class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Согласен с правилами регистрации') }}</span>
                </label>
            </div>
        </form>
    </x-guest-layout>
@endsection
