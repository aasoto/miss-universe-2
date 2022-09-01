<td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
    <div class="flex px-2 py-1">
        {{-- Candidates cells --}}
        @if (isset($attributes['official_picture']))
            <div>
                <img src="images/candidates/{{ $attributes['official_picture'] }}"
                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                alt="user1" />
            </div>
        @endif
        <div class="flex flex-col justify-center">
            @if (isset($attributes['first_name']))

                    @if (isset($attributes['second_name']))
                        <h6 class="mb-0 leading-normal text-sm">
                            {{ $attributes['first_name'] . ' ' . $attributes['second_name'] . ' ' }}
                        </h6>
                        <h6 class="mb-0 leading-normal text-sm">
                            {{$attributes['first_last_name'] . ' ' . $attributes['second_last_name'] }}
                        </h6>
                    @else
                        <h6 class="mb-0 leading-normal text-sm">
                            {{ $attributes['first_name'] . ' '}}
                        </h6>
                        <h6 class="mb-0 leading-normal text-sm">
                            {{$attributes['first_last_name'] . ' ' . $attributes['second_last_name'] }}
                        </h6>
                    @endif
            @endif
            @if (isset($attributes['country']))
                <p class="mb-0 font-semibold leading-tight text-xs"><span class="fi fi-{{$attributes["flag"]}}"></span> {{ $attributes['country'] }}</p>
            @endif
            @if (isset($attributes['birthdate']))
                <p class="mb-0 font-semibold leading-tight text-xs">{{ $attributes['birthdate'] }}</p>
            @endif
            @if (isset($attributes['national_committee']))
                <p class="mb-0 font-semibold leading-tight text-xs">{{ $attributes['national_committee'] }}</p>
            @endif
            @if (isset($attributes['action']))
                @if ($attributes['action'] == 'bfJ84-,D07-3*')
                    <div class="mb-0 flex mt-12">
                        @php
                            $candidate = $attributes['candidate'];
                        @endphp
                        <a href="{{ route('candidates.show', $candidate) }}" title="Ver"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-eye"></i></a>
                        <a href="{{ route('candidates.edit', $candidate) }}" title="Editar"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-edit"></i></a>
                        <form action="{{ route('candidates.destroy', $candidate) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" title="Eliminar"
                            class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                            <i class="p-2 fas fa-trash"></i></button>
                        </form>
                    </div>
                @endif
            @endif
            {{-- end of Candidates cells --}}

            {{-- National committes cells --}}
            @if (isset($attributes["business_name"]))
                <h6 class="mb-0 leading-normal text-sm">{{$attributes["business_name"]}}</h6>
            @endif
            @if (isset($attributes["national_director"]))
                <p class="mb-0 font-semibold leading-tight text-xs">{{ $attributes['national_director'] }}</p>
            @endif
            @if (isset($attributes['action']))
                @if ($attributes['action'] == 'gN6Fe320{lpUmM[{^~')
                    <div class="mb-0 flex mt-12">
                        @php
                            $nationalcommittee = $attributes['nationalcommittee'];
                        @endphp
                        <a href="{{ route('nationalcommittees.show', $nationalcommittee) }}" title="Ver"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-eye"></i></a>
                        <a href="{{ route('nationalcommittees.edit', $nationalcommittee) }}" title="Editar"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-edit"></i></a>
                        <form action="{{ route('nationalcommittees.destroy', $nationalcommittee) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" title="Eliminar"
                            class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                            <i class="p-2 fas fa-trash"></i></button>
                        </form>
                    </div>
                @endif
            @endif
            {{-- end of National Committees cells --}}

            {{-- News cells --}}
            @if (isset($attributes['action']))
                @if ($attributes['action'] == '1af6JyE690-1')
                    <div class="mb-0 flex mt-12">
                        @php
                            $news = $attributes['news'];
                        @endphp
                        <a href="{{ route('news.show', $news) }}" title="Ver"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-eye"></i></a>
                        <a href="{{ route('news.edit', $news) }}" title="Editar"
                        class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                        <i class="p-2 fas fa-edit"></i></a>
                        <form action="{{ route('news.destroy', $news) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" title="Eliminar"
                            class="inline-block w-9 h-9 px-1 py-1 my-0 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102">
                            <i class="p-2 fas fa-trash"></i></button>
                        </form>
                    </div>
                @endif
            @endif
            @if (isset($attributes["title_news"]))
                <h6 class="mb-0 leading-normal text-sm">{{$attributes["title_news"]}}</h6>
            @endif
            @if (isset($attributes["subtitle_news"]))
                <p class="mb-0 font-semibold leading-tight text-xs">{{ $attributes['subtitle_news'] }}</p>
            @endif
            {{-- end of National Committees --}}
        </div>
    </div>
</td>
