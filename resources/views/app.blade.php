<!DOCTYPE html>
<html>
<head>
    <title>@lang('app.name')</title>

    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <script src="{{elixir("js/app.js")}}"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>

</head>
<body>

@if(Auth::check())
    @include('_admin')
@endif

@include('_navbar')

@yield('content')

</body>
</html>
