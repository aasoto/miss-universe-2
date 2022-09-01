@extends('dashboard.layout')

@section('content')
    <br>
    <div class="mx-4">
        <a href="{{ route('candidates.create') }}"
            class="inline-block w-64 px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">Ingresar
            candidata</a>
    </div>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Gestión de candidatas</h6>
                <p class="leading-normal text-sm">Listado general</p>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">

                <div class="p-0 overflow-x-auto">
                    <x-table>
                        <thead class="align-bottom">
                            <tr>
                                <x-table-title>País</x-table-title>
                                <x-table-title>Candidata</x-table-title>
                                <x-table-title>Comité Nacional</x-table-title>
                                <x-table-title>Fecha nacimiento</x-table-title>
                                <x-table-title>Acciones</x-table-title>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidates as $candidate)
                                <tr>
                                    <x-table-cell country="{{ $candidate->country->name }}"
                                        flag="{{ $candidate->country->iso3166_1_alpha2 }}" />
                                    <x-table-cell official_picture="{{ $candidate->official_picture }}"
                                        first_name="{{ $candidate->first_name }}"
                                        second_name="{{ $candidate->second_name }}"
                                        first_last_name="{{ $candidate->first_last_name }}"
                                        second_last_name="{{ $candidate->second_last_name }}" />
                                    <x-table-cell
                                        national_committee="{{ $candidate->national_committee->business_name }}" />
                                    <x-table-cell birthdate="{{ $candidate->birthdate }}" />
                                    <x-table-cell action="bfJ84-,D07-3*" candidate="{{ $candidate->id }}" />
                                </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                    {{ $candidates->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card">
    <div class="card-header-primary">
        <h5>Gestión de candidatas</h5>
    </div>
    <div class="card-body">
        <div class="content-around">
            <a href="{{ route('candidates.create') }}">
                <button class="btn btn-success">
                    <i class="fas fa-user-plus"></i>
                    Crear candidata
                </button>
            </a>
        </div>
        <x-table>
            <thead class="align-bottom">
                <tr>
                    <x-table-title>País</x-table-title>
                    <x-table-title>Candidata</x-table-title>
                    <x-table-title>Comité Nacional</x-table-title>
                    <x-table-title>Fecha nacimiento</x-table-title>
                    <x-table-title>Acciones</x-table-title>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                    <x-table-cell country="{{ $candidate->country->name }}" flag="{{ $candidate->country->iso3166_1_alpha2 }}"/>
                    <x-table-cell official_picture="{{$candidate->official_picture}}" first_name="{{$candidate->first_name}}" second_name="{{$candidate->second_name}}" first_last_name="{{$candidate->first_last_name}}" second_last_name="{{$candidate->second_last_name}}"/>
                    <x-table-cell national_committee="{{$candidate->national_committee->business_name}}"/>
                    <x-table-cell birthdate="{{$candidate->birthdate}}"/>
                    <x-table-cell action="1" candidate="{{$candidate->id}}"/>
                </tr>
                @endforeach
            </tbody>
        </x-table>
        {{--<table class="table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>País</td>
                    <td>Nombres y apellidos</td>
                    <td>Fecha nacimiento</td>
                    <td>Comité</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->id }}</td>
                    <td>
                        {{ $candidate->country->name }}
                    </td>
                    <td>{{ $candidate->first_name.' '.$candidate->second_name.' '.$candidate->first_last_name.' '.$candidate->second_last_name }}</td>
                    <td>{{ $candidate->birthdate }}</td>
                    <td>
                        {{ $candidate->national_committee->business_name }}
                    </td>
                    <td>
                        <a href="{{ route('candidates.show', $candidate) }}">
                            <button class="md:w-1/3 btn btn-primary"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="{{ route('candidates.edit', $candidate) }}">
                            <button class="md:w-1/3 btn btn-warning"><i class="fas fa-edit"></i></button>
                        </a>
                        <form action="{{ route('candidates.destroy', $candidate) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="md:w-1/3 btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>ID</td>
                    <td>País</td>
                    <td>Nombres y apellidos</td>
                    <td>Fecha nacimiento</td>
                    <td>Comité</td>
                    <td>Acciones</td>
                </tr>
            </tfoot>
        </table>
        {{ $candidates->links() }}
    </div>
</div> --}}
@endsection
