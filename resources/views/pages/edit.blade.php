@extends('app')

@section('content')

    <div class="section container" xmlns="http://www.w3.org/1999/html">

        <form class="col s4 offset-s4" method="POST" action="/admin/pages/{{$page->id}}/update">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" name="title" type="text" class="validate" value="{{$page->title}}">
                    <label for="title">Название</label>
                </div>
                <div class="input-field col s12">
                    <input id="description" type="text" name="description" class="validate" value="{{$page->description}}">
                    <label for="description">Описание</label>
                </div>
                <div class="input-field col s12">
                    <textarea type="text" id="body" name="body" class="materialize-textarea">{!! $page->body !!}</textarea>
                    <label for="body">Содержание</label>
                </div>
                <div class="input-field col s12" style="margin-top: 50px;">
                    <button class="btn" type="submit">Сохранить</button>
                </div>
            </div>
        </form>

    </div>

@endsection