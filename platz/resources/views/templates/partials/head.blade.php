{{--
    resources/views/templates/partials/head.blade.php
 --}}

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Platz - @yield('title')</title>

  <!-- Behavioral Meta Data -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Fonts -->
  <link rel="icon" type="image/png" href="{{ asset('img/small-logo-01.png')}}">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <!-- Styles -->
  <link href='{{ asset('css/style.css')}}' rel='stylesheet' type='text/css'>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href='{{ asset('css/details.css')}}' rel='stylesheet' type='text/css'>

</head>
