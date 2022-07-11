<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

        <link
            rel="stylesheet"
            href="{{ asset('dashboard/css/themify-icons.css') }}"
        />

        <!-- Styles -->
        <link
            rel="stylesheet"
            href="{{ asset('dashboard/css/app.css') }}"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        <!-- Scripts -->
        <script src="{{ asset('dashboard/js/app.js') }}" defer></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4MD1G7NGS9"></script>

    </head>
    <body class="font-sans antialiased text-gray-700 bg-gray-50">
        @if (Session::get('success'))
            <x-custom.flash type="success">
                <div>
                    <h1 class="text-md font-bold">
                        Successfully Adding a record
                    </h1>
                    <p class="text-sm tracking-wide leading-loose">
                        {{Session::get('success')}}
                    </p>
                </div>
            </x-custom.flash>
        @endif
        @if (Session::get('error'))
            <x-custom.flash type="error">
                <div>
                    <h1 class="text-md font-bold">
                        Something went wrong
                    </h1>
                    <p class="text-sm tracking-wide leading-loose">
                        {{Session::get('error')}}
                    </p>
                </div>
            </x-custom.flash>
        @endif

        @include('layouts.partials.side-navbar')
        <div class="min-h-screen ml-72">
            {{-- <div class="flex justify-between"> --}}
                {{-- <div> --}}
                    @include('layouts.partials.main-navigation')
                    <!-- Page Heading -->
                    {{-- <header class="max-w-7xl mx-auto mx-4 sm:mx-6 lg:mx-8">
                        <div class="border-b border-gray-300 py-6">
                            {{ $header }}
                        </div>
                    </header> --}}
                    <!-- Page Content -->
                    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </main>
                {{-- </div> --}}
            {{-- </div> --}}

        </div>

    </body>
</html>
