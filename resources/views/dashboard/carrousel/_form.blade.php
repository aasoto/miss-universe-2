@csrf
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Imagen de fondo</label>
        <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            name="image" id="image">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Título</label>
        <input type="text" name="title" id="title" value="{{ old('title', $carrousel->title) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="" aria-label="">
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="">Subtítulo</label>
        <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $carrousel->subtitle) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="" aria-label="">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Imagen secundaria</label>
        <input type="file" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            name="secondary_image" id="secondary_image">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Botón 1</label>
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <input type="text" name="button_1_text" id="button_1_text" value="{{ old('button_1_text', $carrousel->button_1_text) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="Texto" aria-label="">
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <select name="button_1_type" id="button_1_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        placeholder = "Tipo">
            <option {{ old('button_1_type', $carrousel->button_1_type) == 'default' ? 'selected' : '' }} value="default">Default</option>
            <option {{ old('button_1_type', $carrousel->button_1_type) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
        </select>
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <input type="text" name="button_1_link" id="button_1_link" value="{{ old('button_1_link', $carrousel->button_1_link) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="Link" aria-label="">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Botón 2</label>
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <input type="text" name="button_2_text" id="button_2_text" value="{{ old('button_1_text', $carrousel->button_2_text) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="Texto" aria-label="">
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <select name="button_2_type" id="button_2_type" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
        placeholder = "Tipo">
            <option {{ old('button_2_type', $carrousel->button_2_type) == 'default' ? 'selected' : '' }} value="default">Default</option>
            <option {{ old('button_2_type', $carrousel->button_2_type) == 'gradient duotone' ? 'selected' : '' }} value="gradient duotone">Gradient Duotone</option>
        </select>
    </div>
    <div class="w-full md:w-4/12 px-3 mb-6 md:mb-0">
        <input type="text" name="button_2_link" id="button_2_link" value="{{ old('button_1_link', $carrousel->button_2_link) }}"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="Link" aria-label="">
    </div>
</div>
