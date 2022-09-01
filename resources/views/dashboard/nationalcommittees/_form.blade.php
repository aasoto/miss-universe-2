@csrf
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Razón social</label>
        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
            name="business_name" id="business_name" value="{{ old("business_name", $nationalcommittee->business_name) }}"></td>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Director nacional</label>
        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
            name="national_director" id="national_director" value="{{ old("national_director", $nationalcommittee->national_director) }}">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">País</label>
        <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
            name="country_id" id="country_id">
            @foreach ($countries as $name => $id)
                <option {{ old("country_id", $nationalcommittee->country_id) == $id ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
    </div>
</div>
