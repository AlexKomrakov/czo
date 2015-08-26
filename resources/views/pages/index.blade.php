@extends('app')

@section('content')

    <div class="section container">
        <a class="btn green" href="/admin/pages/create">Добавить страницу</a>

        <table>
            <thead>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Ключевые слова</th>
                <th>Управление</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pages as $page)
            <tr>
                <td width="30">
                    {{$page->title}}
                    <div>
                        <small>{{$page->id}}</small>
                    </div>
                </td>
                <td width="30"><small>{{$page->description}}</small></td>
                <td width="10"><small>{{$page->keywords}}</small></td>
                <td width="20">
                    <a class="btn red" href="/admin/pages/{{$page->id}}/delete">Удалить</a>
                    <a class="btn" href="/admin/pages/{{$page->id}}/edit">Изменить</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection