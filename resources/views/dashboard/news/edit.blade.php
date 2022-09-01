@extends('dashboard.alternative-layout')
@section('content')
<input type="hidden" name="alternative" id="alternative" value="2">
<section class="min-h-screen mb-32">
    <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
        style="background-image: url('../../assets/img/curved-images/curved1.jpg')">
        <span
            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
        <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
                <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                    <h1 class="mt-12 mb-2 text-white">Actualizar noticia</h1>
                    <p class="text-white">
                        {{ $news->title }}
                    </p>
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
                        <form role="form text-left" action="{{ route('news.update', $news->id) }}"
                            method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @include('dashboard.fragment._errors-form')
                            @include('dashboard.news._form')
                            <div class="text-center">
                                <button type="submit"
                                    class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                    Actualizar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   {{-- <br>
    <div class="card">
        <div class="card-header-warning">
            <h5>Editar noticia</h5>
        </div>
        <form class="form-grid" action="{{ route('news.update', $news->id) }}" method="post">
            @method('PUT')
            <div class="card-body">
                @include('dashboard.fragment._errors-form')
                @include('dashboard.news._form')
            </div>
            <div class="card-footer">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>
        </form>
    </div>--}}
@endsection
