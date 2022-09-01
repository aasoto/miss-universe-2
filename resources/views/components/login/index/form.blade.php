<form method="POST" action="{{ route('login') }}">
    @csrf
    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
    <div class="mb-4">
      <input type="email" id="email" name="email" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
    </div>
    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Password</label>
    <div class="mb-4">
      <x-password id="password" name="password"/>
    </div>
    <div class="min-h-6 mb-0.5 block pl-12">
        <x-checkbox id="rememberMe" class="mt-0.54"/>
      <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="rememberMe">Remember me</label>
    </div>
    <div class="text-center">
      <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Sign in</button>
    </div>
  </form>
