<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Dimitri Kvachakhia | Personal Website</title>
    <meta property="og:title" content="@yield('title') Dimitri Kvachakhia | Personal Website" />
    <meta property="og:type" content="personal" />
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('imgae')" />
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v6.0"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92192675-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-92192675-3');
    </script>
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
