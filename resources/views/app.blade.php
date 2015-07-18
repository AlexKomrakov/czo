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

<nav>
    <div class="nav-wrapper container" style="overflow: hidden;">
        <a href="#!" class="brand-logo">
            <img src="/public/img/logo.png" style="position: relative; height: 100%;">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" style="margin-left: 150px;">
            <li><a class="waves-effect waves-light btn blue-grey" href="">Контакты</a></li>
            <li><a class="waves-effect waves-light btn blue-grey" href="">Услуги</a></li>
            <li><a class="waves-effect waves-light btn blue-grey" href="">Клиенты и отзывы</a></li>
            <li><a class="waves-effect waves-light btn blue-grey" href="">Вопросы и ответы</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="">Контакты</a></li>
            <li><a href="">Услуги</a></li>
            <li><a href="">Клиенты и отзывы</a></li>
            <li><a href="">Вопросы и ответы</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>
