@extends('dashboard.alternative-layout')
@section('content')
<input type="hidden" name="alternative" id="alternative" value="1">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
            style="background-image: url('../assets/img/curved-images/curved14.jpg')">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="mt-12 mb-2 text-white">{{$news->title}}</h1>
                        <p class="text-white">{{$news->subtitle}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-11/12 lg:w-1/12 xl:w-1/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <p>
                                {{$news->content}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 {{--   <br>
    <div class="card">
        <div class="card-header-primary">
            <h5>Mostrar noticia</h5>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td><b>Título</b></td>
                    <td>{{$news->title}}</td>
                </tr>
                <tr>
                    <td><b>Slug</b></td>
                    <td>{{$news->slug}}</td>
                </tr>
                <tr>
                    <td><b>Subtitulo</b></td>
                    <td>{{$news->subtitle}}</td>
                </tr>
                <tr>
                    <td><b>Contenido</b></td>
                    <td>{{$news->content}}</td>
                </tr>
            </table>
        </div>
    </div>--}}
@endsection
