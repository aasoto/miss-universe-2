@extends('dashboard.layout')
@section('content')
<div class="mx-4">
    <a href="{{ route('news.create') }}"
        class="inline-block w-64 px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
        Ingresar nueva noticia</a>
</div>
<div class="flex-none w-full max-w-full px-3 mt-6">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="mb-1">Gestión de noticias</h6>
            <p class="leading-normal text-sm">Listado general</p>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <x-table>
                    <thead class="align-bottom">
                        <tr>
                            <x-table-title>Acciones</x-table-title>
                            <x-table-title>Título</x-table-title>
                            <x-table-title>Subtitulo</x-table-title>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $n)
                            <tr>
                                <x-table-cell action="1af6JyE690-1" news="{{ $n->id }}" />
                                <x-table-cell title_news="{{ $n->title }}"/>
                                <x-table-cell subtitle_news="{{ $n->subtitle }}" />
                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
{{--<br>
<div class="card">
    <div class="card-header-primary">
        <h5>Listado de noticias</h5>
    </div>
    <div class="card-body">
        <a href="{{ route('news.create') }}">
            <button class="btn btn-success">Crear nueva noticia</button>
        </a>
        <table class="table-striped">
            <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Titulo</b></td>
                    <td><b>Slug</b></td>
                    <td><b>Subtitulo</b></td>
                    <td><b>Acciones</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $n)
                <tr>
                    <td>{{$n->id}}</td>
                    <td>{{$n->title}}</td>
                    <td>{{$n->slug}}</td>
                    <td>{{$n->subtitle}}</td>
                    <td>
                        <a href="{{ route('news.show', $n) }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>
                        <a href="{{ route('news.edit', $n) }}">
                            <button class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>

                        <form action="{{ route('news.destroy', $n) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Titulo</b></td>
                    <td><b>Slug</b></td>
                    <td><b>Subtitulo</b></td>
                    <td><b>Acciones</b></td>
                </tr>
            </tfoot>
        </table>
        {{ $news->links() }}
    </div>
</div>--}}

@endsection
