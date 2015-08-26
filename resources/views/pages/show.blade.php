@extends('app')

@section('title'){{ $page->title }} — @endsection

@section('keywords'){{ $page->keywords }}@endsection

@section('description'){{ $page->description }}@endsection

@section('content')

    {!! $page->body !!}

@endsection