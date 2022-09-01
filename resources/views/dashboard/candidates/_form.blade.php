@csrf
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">País</label>
        <select placeholder="País" aria-label="País" name="country_id" id="country_id"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
            @foreach ($countries as $name => $id)
                <option {{ old('country_id', $candidate->country_id) == $id ? 'selected' : '' }} value="{{ $id }}">
                    {{ $name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Primer nombre</label>
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $candidate->first_name) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="" aria-label="">
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Segundo nombre</label>
        <input type="text" name="second_name" id="second_name" value="{{ old('second_name', $candidate->second_name) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="" aria-label="">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Primer apellido</label>
        <input type="text" name="first_last_name" id="first_last_name"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            value="{{ old('first_last_name', $candidate->first_last_name) }}">
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Segundo apellido</label>
        <input type="text" name="second_last_name" id="second_last_name"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            value="{{ old('second_last_name', $candidate->second_last_name) }}">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Genero</label>
        <select name="gender" id="gender" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
            <option {{ old('gender', $candidate->gender) == 'f' ? 'selected' : '' }} value="f">Femenino</option>
            <option {{ old('gender', $candidate->gender) == 'm' ? 'selected' : '' }} value="m">Masculino</option>
        </select>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="birthdate" id="birthdate"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            value="{{ old('birthdate', $candidate->birthdate) }}">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Comité national</label>
        <select name="national_committee_id" id="national_committee_id"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
            @foreach ($national_committees as $business_name => $id)
                <option {{ old('national_committee_id', '') == $id ? 'selected' : $candidate->national_committee_id }}
                    value="{{ $id }}">{{ $business_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Foto oficial</label>
    <input type="file" name="official_picture" id="official_picture"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
    </div>
</div>
{{--<div class="mb-4">
    <label for="">País</label>
    <select placeholder="País" aria-label="País" name="country_id" id="country_id"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
        @foreach ($countries as $name => $id)
            <option {{ old('country_id', $candidate->country_id) == $id ? 'selected' : '' }} value="{{ $id }}">
                {{ $name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4">
    <label for="">Primer nombre</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $candidate->first_name) }}"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        placeholder="" aria-label="">
</div>
<div class="mb-4">
    <label for="">Segundo nombre</label>
    <input type="text" name="second_name" id="second_name" value="{{ old('second_name', $candidate->second_name) }}"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        placeholder="" aria-label="">
</div>
<div class="mb-4">
    <label for="">Primer apellido</label>
    <input type="text" name="first_last_name" id="first_last_name"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        value="{{ old('first_last_name', $candidate->first_last_name) }}">
</div>
<div class="mb-4">
    <label for="">Segundo apellido</label>
    <input type="text" name="second_last_name" id="second_last_name"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        value="{{ old('second_last_name', $candidate->second_last_name) }}">
</div>
<div class="mb-4">
    <label for="">Genero</label>
    <select name="gender" id="gender" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
        <option {{ old('gender', $candidate->gender) == 'f' ? 'selected' : '' }} value="f">Femenino</option>
        <option {{ old('gender', $candidate->gender) == 'm' ? 'selected' : '' }} value="m">Masculino</option>
    </select>
</div>
<div class="mb-4">
    <label for="">Fecha de nacimiento</label>
    <input type="date" name="birthdate" id="birthdate"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        value="{{ old('birthdate', $candidate->birthdate) }}">
</div>
<div class="mb-4">
    <label for="">Comité national</label>
    <select name="national_committee_id" id="national_committee_id"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
        @foreach ($national_committees as $business_name => $id)
            <option {{ old('national_committee_id', '') == $id ? 'selected' : $candidate->national_committee_id }}
                value="{{ $id }}">{{ $business_name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4">
    <label for="">Foto oficial</label>
    <input type="file" name="official_picture" id="official_picture"
        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
</div>--}}

{{-- <section class="min-h-screen mb-32">
<div class="form-grid-div-1">
    <div class="form-grid-div-lonely">
        <label for="">País</label>
        <select name="country_id" id="country_id">
            @foreach ($countries as $name => $id)
                <option {{ old("country_id", $candidate->country_id) == $id ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Primer nombre</label>
        <input type="text" name="first_name" id="first_name" value="{{ old("first_name", $candidate->first_name) }}">
    </div>
    <div class="form-grid-div-2">
        <label for="">Segundo nombre</label>
        <input type="text" name="second_name" id="second_name" value="{{ old("second_name", $candidate->second_name) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Primer apellido</label>
        <input type="text" name="first_last_name" id="first_last_name" value="{{ old("first_last_name", $candidate->first_last_name) }}">
    </div>
    <div class="form-grid-div-2">
        <label for="">Segundo apellido</label>
        <input type="text" name="second_last_name" id="second_last_name" value="{{ old("second_last_name", $candidate->second_last_name) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Genero</label>
        <select name="gender" id="gender">
            <option {{ old("gender", $candidate->gender) == "f" ? 'selected' : '' }} value="f">Femenino</option>
            <option {{ old("gender", $candidate->gender) == "m" ? 'selected' : '' }} value="m">Masculino</option>
        </select>
    </div>
    <div class="form-grid-div-2">
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="birthdate" id="birthdate" value="{{ old("birthdate", $candidate->birthdate) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Comité national</label>
        <select name="national_committee_id" id="national_committee_id">
            @foreach ($national_committees as $business_name => $id)
                <option {{ old("national_committee_id", "") == $id ? 'selected' : $candidate->national_committee_id }} value="{{$id}}">{{$business_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-grid-div-2">
        <label for="">Foto oficial</label>
        <input type="file" name="official_picture" id="official_picture">
    </div>
</div> --}}
