@extends('app')

@section('content')

    <div class="section container" xmlns="http://www.w3.org/1999/html">

        <form class="col s4 offset-s4" method="POST" action="/admin/pages">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12">
                    <input id="id" name="id" type="text" class="validate">
                    <label for="id">Идентификатор</label>
                </div>
                <div class="input-field col s12">
                    <input id="title" name="title" type="text" class="validate">
                    <label for="title">Название</label>
                </div>
                <div class="input-field col s12">
                    <input id="description" type="text" name="description" class="validate">
                    <label for="description">Описание</label>
                </div>
                <div class="input-field col s12">
                    <textarea type="text" id="body" name="body" class="materialize-textarea"></textarea>
                    <label for="body">Содержание</label>
                </div>
                <div class="input-field col s12" style="margin-top: 50px;">
                    <button class="btn" type="submit">Сохранить</button>
                </div>
            </div>
        </form>

    </div>

@endsection