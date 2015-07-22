@extends('app')

@section('content')

    <div class="section container">
        <a class="btn green" href="/admin/pages/create">Добавить страницу</a>

        <table>
            <thead>
            <tr>
                <th data-field="id">Имя</th>
                <th data-field="name">Описание</th>
                <th data-field="name">Управление</th>
            </tr>
            </thead>

            <tbody>
            @foreach($pages as $page)
            <tr>
                <td>
                    {{$page->title}}
                    <div>
                        <small>{{$page->id}}</small>
                    </div>
                </td>
                <td>{{$page->description}}</td>
                <td>
                    <a class="btn red" href="/admin/pages/{{$page->id}}/delete">Удалить</a>
                    <a class="btn" href="/admin/pages/{{$page->id}}/edit">Изменить</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection