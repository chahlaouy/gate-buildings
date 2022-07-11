<x-guest-layout>
    <x-auth-card>
        <x-slot name="header">
            <div>
                <h2 class="text-2xl font-bold mb-4">{{__('Sign up')}}</h2>
                <p class="tracking-wide leading-loose text-gray-500">{{__('Enter your credentials to sign up')}}</p>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                {{-- <x-label for="name" :value="__('Name')" /> --}}

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="{{__('Full Name')}}" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-label for="email" :value="__('Email')" /> --}}

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="{{__('Email')}}" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{-- <x-label for="password" :value="__('Password')" /> --}}

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="{{__('Password')}}" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required
                                placeholder="{{__('Confirm Password')}}" />
            </div>

            <div class="flex items-center justify-end my-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <x-button class="w-full">
                {{ __('Register') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
