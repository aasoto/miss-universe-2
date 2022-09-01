@extends('web.layout')
@section('content')
    <x-web.blog.news.show :news="$news"/>
@endsection
