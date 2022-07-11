<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <meta name="description"
        content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&display=swap"
        rel="stylesheet">

    <!-- FavIcon -->
    <link href="{{ asset('landing-page/images/favicon/favicon.png') }}" rel="icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('landing-page/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script> --}}
</head>

<body class="">
    <div class="wrapper">
        @include('pages.layouts.partials.navbar')

        @yield("content")
        @include('pages.layouts.partials.footer')

        <div class="module__search-container">
            <i class="fa fa-times close-search"></i>
            <form class="module__search-form">
                <input type="text" class="search__input" placeholder="Type Words Then Enter">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.module-search-container -->

        <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
    </div><!-- /.wrapper -->

    <script src="{{ asset('landing-page/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('landing-page/js/plugins.js') }}"></script>
    <script src="{{ asset('landing-page/js/main.js') }}"></script>
</body>

</html>
