
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

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
    </head>
    <body>
        <div class="flex">
            <div class="md:hidden lg:block flex-1 relative p-5">
                {{-- <div class="absolute z-50 w-full h-full top-0 right-0 bg-gray-900 bg-opacity-25"></div> --}}
                <img src="{{asset('dashboard/images/illustration-signin.jpg')}}" alt="" class="bg-cover bg-center w-full h-full rounded-2xl">
            </div>
            <div class="font-sans text-gray-900 antialiased flex-1">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
