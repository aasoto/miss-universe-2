@extends('web.layout')
@section('content')
    <h1>Página web</h1>
    {{-- Se invoca componente web con el listado de noticias --}}
    <x-web.blog.news.index :news="$news"/>
@endsection
