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
                        <h1 class="mt-12 mb-2 text-white">Ingresar nueva noticia</h1>
                        <p class="text-white">Redacte el articulo o la noticia que desea publicar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-8/12 lg:w-1/12 xl:w-1/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <form role="form text-left" action="{{ route('news.store') }}" method="post"
                                enctype="multipart/form-data">
                                @include('dashboard.fragment._errors-form')
                                @include('dashboard.news._form')
                                <div class="text-center">
                                    <button type="submit"
                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                        Guardar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
{{--<form class="form-grid" action="{{ route('news.store') }}" method="post">
    <div class="card">
        <div class="card-header-success">
            <h5>Crear nueva noticia</h5>
        </div>
        <div class="card-body">
            @include('dashboard.fragment._errors-form')
            @include('dashboard.news._form')
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </div>
</form>--}}
@endsection
