@extends('dashboard.layout')
@section('content')
<br>
<div class="mx-4">
    <a href="{{ route('nationalcommittees.create') }}"
        class="inline-block w-64 px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
        Ingresar comité nacional</a>
</div>
<div class="flex-none w-full max-w-full px-3 mt-6">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
            <h6 class="mb-1">Gestión de comités nacionales</h6>
            <p class="leading-normal text-sm">Listado general</p>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <x-table>
                    <thead class="align-bottom">
                        <tr>
                            <x-table-title>País</x-table-title>
                            <x-table-title>Razón social</x-table-title>
                            <x-table-title>Director nacional</x-table-title>
                            <x-table-title>Acciones</x-table-title>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nationalcommittees as $nationalcommittee)
                            <tr>
                                <x-table-cell country="{{ $nationalcommittee->country->name }}"
                                    flag="{{ $nationalcommittee->country->iso3166_1_alpha2 }}" />
                                <x-table-cell
                                    business_name="{{ $nationalcommittee->business_name }}" />
                                <x-table-cell
                                    national_director="{{ $nationalcommittee->national_director }}" />
                                <x-table-cell action="gN6Fe320{lpUmM[{^~" nationalcommittee="{{ $nationalcommittee->id }}" />
                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
                {{ $nationalcommittees->links() }}
            </div>
        </div>
    </div>
</div>
{{--<div class="card">
    <div class="card-header-primary">
        <h5>Comités nacionales</h5>
    </div>
    <div class="card-body">
        <a href="{{ route('nationalcommittees.create') }}">
            <button class="btn btn-success">Crear comité</button>
        </a>
        <table class="table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Razón social</td>
                    <td>Director nacional</td>
                    <td>País</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($nationalcommittees as $nationalcommittee)
                <tr>
                    <td>{{ $nationalcommittee->id }}</td>
                    <td>
                        {{ $nationalcommittee->business_name }}
                    </td>
                    <td>{{ $nationalcommittee->national_director }}</td>
                    <td>
                        {{ $nationalcommittee->country->name }}
                    </td>
                    <td>
                        <a href="{{ route('nationalcommittees.show', $nationalcommittee) }}">
                            <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="{{ route('nationalcommittees.edit', $nationalcommittee) }}">
                            <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </a>
                        <form action="{{ route('nationalcommittees.destroy', $nationalcommittee) }}" method="post">
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
                    <td>ID</td>
                    <td>Razón social</td>
                    <td>Director nacional</td>
                    <td>País</td>
                    <td>Acciones</td>
                </tr>
            </tfoot>
        </table>
        {{ $nationalcommittees->links() }}
    </div>
</div>--}}
@endsection
