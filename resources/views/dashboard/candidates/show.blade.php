@extends('dashboard.alternative-layout')
@section('content')
<input type="hidden" name="alternative" id="alternative" value="1">

<div class="w-full px-6 mx-auto">
    <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
      <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
    </div>
    <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-auto max-w-full px-3">
          <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
            <img src="../images/candidates/{{$candidate->official_picture}}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
          </div>
        </div>
        <div class="flex-none w-auto max-w-full px-3 my-auto">
          <div class="h-full">
            <h5 class="mb-1">{{$candidate->first_name.' '.$candidate->second_name.' '.$candidate->first_last_name.' '.$candidate->second_last_name}}</h5>
            <p class="mb-0 font-semibold leading-normal text-sm">
                @foreach ($countries as $key => $value)
                    @if ($candidate->country_id == $value["id"])
                        <span class="fi fi-{{$value["iso3166_1_alpha2"]}}"></span>
                    @endif
                @endforeach
                @foreach ($countries as $key => $value)
                @if ($candidate->country_id == $value["id"])
                    {{$value["name"]}}
                @endif
                @endforeach /
                @foreach ($national_committees as $business_name => $id)
                @if ($candidate->national_committee_id == $id)
                    {{$business_name}}
                @endif
                @endforeach</p>
          </div>
        </div>
        <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
          <div class="relative right-0">
            <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills role="tablist">
              <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link active href="javascript:;" role="tab" aria-selected="true">
                    <i class="fas fa-image"></i>
                  <span class="ml-1">Fotos</span>
                </a>
              </li>
              <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                    <i class="fas fa-film"></i>
                  <span class="ml-1">Videos</span>
                </a>
              </li>
              {{--<li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                    <i class="fas fa-file-alt"></i>
                  <span class="ml-1">Hoja de vida</span>
                </a>
              </li>--}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
