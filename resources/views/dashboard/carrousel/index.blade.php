@extends('dashboard.layout')

@section('content')
    <div class="mx-4">
        <a href="{{ route('carrousel.create') }}"
            class="inline-block w-64 px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
            Ingresar nuevo ítem</a>
    </div>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Gestión de ítems del carrusel</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap -mx-3">
                            @php
                                $number = 1;
                            @endphp
                            @foreach ($carrousel as $carrousel)
                            <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                    <br>
                                    <div class="relative">
                                        <a class="block shadow-xl rounded-2xl">
                                            <img src="images/carrousel/background/{{$carrousel->image}}" alt="img-blur-shadow"
                                                class="max-w-full shadow-soft-2xl rounded-2xl" style="height: 200px; width: 250px;" />
                                        </a>
                                    </div>
                                    <div class="flex-auto px-1 pt-6">
                                        <p
                                            class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                            Número: {{$number}}</p>
                                        <a href="javascript:;">
                                            <h5>{{$carrousel->title}}</h5>
                                        </a>
                                        <p class="mb-6 leading-normal text-sm">{{$carrousel->subtitle}}</p>
                                        <div class="flex items-center justify-between">
                                            <a href="{{ route('carrousel.edit', $carrousel) }}">
                                                <button type="button"
                                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
                                                    Editar
                                                </button>
                                            </a>
                                            <form action="{{ route('carrousel.destroy', $carrousel) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="image" id="image" value="{{$carrousel->image}}">
                                                <input type="hidden" name="secondary_image" id="secondary_image" value="{{$carrousel->secondary_image}}">
                                                <button type="submit"
                                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
                                                    Eliminar
                                                </button>
                                            </form>

                                            {{--<div class="mt-2">

                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $number++;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-touch="false" data-interval="false">
                        <ol class="carousel-indicators">
                            @php
                                $number = 0;
                            @endphp
                            @foreach ($carrousel as $key => $value)
                                @if ($number == 0)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$number}}" class="active"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$number}}"></li>
                                @endif
                                @php
                                    $number = $number + 1;
                                @endphp
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @php
                                $active = true;
                            @endphp
                            @foreach ($carrousel as $key => $value)
                                @if ($active)
                                <div class="carousel-item active">
                                    <br>
                                    <form role="form text-left" action="{{ route('carrousel.update', $value['id']) }}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="relative flex flex-wrap mx-30 mb-6">
                                            <br>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <a class="block shadow-xl rounded-2xl" style="height: 200px; width: 200px;">
                                                    <img src="images/carrousel/background/{{$value["image"]}}" alt="img-blur-shadow" class="shadow-soft-2xl rounded-2xl" style="height: 200px; width: 400px;" />
                                                </a>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                @if ($value['secondary_image'] == null)
                                                    <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border" style="height: 200px; width: 200px;">
                                                        <div class="flex flex-col justify-center flex-auto p-6 text-center shadow-xl rounded-2xl">
                                                        <a href="javascript:;">
                                                            <i class="mb-4 fa fa-times text-slate-400"></i>
                                                            <h5 class="text-slate-400">Imagen secundaria no existe</h5>
                                                        </a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <a class="block shadow-xl rounded-2xl" style="height: 200px; width: 200px;">
                                                        <img src="images/carrousel/seconsaries_images/{{$value["secondary_image"]}}" alt="img-blur-shadow" class="shadow-soft-2xl rounded-2xl" style="height: 200px; width: 200px;" />
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Imagen de fondo</label>
                                                <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label for="">Título</label>
                                                <input type="text" name="title" id="title" value="{{ old('title', $value['title']) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="" aria-label="">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label for="">Subtítulo</label>
                                                <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $value["subtitle"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Imagen secundaria</label>
                                                <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    name="secondary_image" id="secondary_image">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Botón 1</label>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_1_text" id="button_1_text" value="{{ old('button_1_text', $value["button_1_text"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Texto" aria-label="">
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <select name="button_1_type" id="button_1_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder = "Tipo">
                                                    <option {{ old('button_1_type', $value["button_1_type"]) == 'default' ? 'selected' : '' }} value="default">Default</option>
                                                    <option {{ old('button_1_type', $value["button_1_type"]) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_1_link" id="button_1_link" value="{{ old('button_1_link', $value["button_1_link"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Link" aria-label="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Botón 2</label>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_2_text" id="button_2_text" value="{{ old('button_1_text', $value["button_2_text"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Texto" aria-label="">
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <select name="button_2_type" id="button_2_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder = "Tipo">
                                                    <option {{ old('button_2_type', $value["button_2_type"]) == 'default' ? 'selected' : '' }} value="default">Default</option>
                                                    <option {{ old('button_2_type', $value["button_2_type"]) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_2_link" id="button_2_link" value="{{ old('button_1_link', $value["button_2_link"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Link" aria-label="">
                                            </div>
                                        </div>
                                        <div class="mx-30 text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                                Actualizar
                                            </button>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                                {{$active = false;}}
                                @else
                                <div class="carousel-item">
                                    <form role="form text-left" action="{{ route('carrousel.update', $value['id']) }}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="relative flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <br>
                                                <a class="block shadow-xl rounded-2xl" style="height: 200px; width: 200px;">
                                                    <img src="images/carrousel/background/{{$value["image"]}}" alt="img-blur-shadow" class="shadow-soft-2xl rounded-2xl" style="height: 200px; width: 400px;" />
                                                </a>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                @if ($value['secondary_image'] == null)
                                                    <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border" style="height: 200px; width: 200px;">
                                                        <div class="flex flex-col justify-center flex-auto p-6 text-center shadow-xl rounded-2xl">
                                                            <br>
                                                            <a href="javascript:;">
                                                                <i class="mb-4 fa fa-times text-slate-400"></i>
                                                                <h5 class="text-slate-400">Imagen secundaria no existe</h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <br>
                                                    <a class="block shadow-xl rounded-2xl" style="height: 200px; width: 200px;">
                                                        <img src="images/carrousel/secondaries_images/{{$value["secondary_image"]}}" alt="img-blur-shadow" class="shadow-soft-2xl rounded-2xl" style="height: 200px; width: 200px;" />
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Imagen de fondo</label>
                                                <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label for="">Título</label>
                                                <input type="text" name="title" id="title" value="{{ old('title', $value["title"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="" aria-label="">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label for="">Subtítulo</label>
                                                <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $value["subtitle"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Imagen secundaria</label>
                                                <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    name="secondary_image" id="secondary_image">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Botón 1</label>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_1_text" id="button_1_text" value="{{ old('button_1_text', $value["button_1_text"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Texto" aria-label="">
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <select name="button_1_type" id="button_1_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder = "Tipo">
                                                    <option {{ old('button_1_type', $value["button_1_type"]) == 'default' ? 'selected' : '' }} value="default">Default</option>
                                                    <option {{ old('button_1_type', $value["button_1_type"]) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_1_link" id="button_1_link" value="{{ old('button_1_link', $value["button_1_link"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Link" aria-label="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap mx-30 mb-6">
                                            <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
                                                <label for="">Botón 2</label>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_2_text" id="button_2_text" value="{{ old('button_1_text', $value["button_2_text"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Texto" aria-label="">
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <select name="button_2_type" id="button_2_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder = "Tipo">
                                                    <option {{ old('button_2_type', $value["button_2_type"]) == 'default' ? 'selected' : '' }} value="default">Default</option>
                                                    <option {{ old('button_2_type', $value["button_2_type"]) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
                                                </select>
                                            </div>
                                            <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
                                                <input type="text" name="button_2_link" id="button_2_link" value="{{ old('button_1_link', $value["button_2_link"]) }}"
                                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Link" aria-label="">
                                            </div>
                                        </div>
                                        <div class="mx-30 text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                                Actualizar
                                            </button>
                                        </div>
                                        <br>
                                        <br>
                                    </form>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
