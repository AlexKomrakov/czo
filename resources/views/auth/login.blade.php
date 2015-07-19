@extends('app')

@section('content')

    <div class="row" style="margin-top: 50px;">
        <form class="col s4 offset-s4" method="POST" action="/admin">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" type="text" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Пароль</label>
                </div>
                <div class="input-field col s12">
                    <input type="checkbox" id="remember" name="remember"/>
                    <label for="remember">Запомнить меня</label>
                </div>
                <div class="input-field col s12" style="margin-top: 50px;">
                    <button class="btn" type="submit">Вход</button>
                </div>
            </div>
        </form>
    </div>

@endsection