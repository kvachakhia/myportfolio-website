<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('partials.head')
</head>
<body>
   @include('partials.header')
   <style>
    .typed-cursor{
        display: none;
    }
</style>
    <main id="main">
        @yield('content')
    </main>

   @include('partials.footer')
</body>
</html>
