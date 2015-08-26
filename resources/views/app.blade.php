<!DOCTYPE html>
<html>
<head>

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title')@lang('app.name')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name='yandex-verification' content='767e6bb3699c8047' />

    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <script src="{{elixir("js/app.js")}}"></script>
    <script src="/ckeditor/ckeditor.js"></script>

    <link rel="stylesheet" href="/lightbox2/dist/css/lightbox.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>

</head>
<body>

<header>
    @if(Auth::check())
        @include('_admin')
    @endif

    @include('_navbar')
</header>

<main>
    @yield('content')
</main>

@include('_footer')

<script src="/lightbox2/dist/js/lightbox.min.js"></script>

<script>
    $( document ).ready(function() {
        $(".button-collapse").sideNav();
    });

    lightbox.option({
        'resizeDuration': 200,
        'showImageNumberLabel': false,
        'wrapAround': true
    })
</script>

</body>
</html>
