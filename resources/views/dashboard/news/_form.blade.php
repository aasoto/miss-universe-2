@csrf
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Título</label>
        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
            name="title" id="title" value="{{ old("title", $news->title) }}">
    </div>
    {{--<div class="form-grid-div-2">
        <label for="">Slug</label>
        <input type="text" name="slug" id="slug" value="{{ old("slug", $news->slug) }}">
    </div>--}}
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Subtitulo</label>
        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
            name="subtitle" id="subtitle" value="{{ old("subtitle", $news->subtitle) }}">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-2/2 px-3 mb-6 md:mb-0">
        <label for="">Contenido</label>
        <textarea class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="" aria-label=""
        name="content" id="content" cols="30" rows="10">{{ old("content", $news->content) }}</textarea>
    </div>
</div>
