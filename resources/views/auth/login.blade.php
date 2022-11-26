@extends('layouts.app')

@section('content')
  <div class="flex justify-center w-full">
    <div class="shadow-md p-5 rounded-lg mt-10 flex flex-col gap-2 w-2/5">
      <p class="font-semibold text-2xl">Login</p>
      <div class="flex flex-col gap-2">
        @if (session('errorMessage'))
          <span class="w-full bg-red-500 rounded-lg p-2 text-white text-center font-semibold">
            {{ session('errorMessage') }}
          </span>
        @endif
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="flex flex-col gap-2">
            <x-inputs.text type="email" name="email" id="email" label="Email" value="{{ old('email') }}" />
            <x-inputs.text type="password" name="password" id="password" label="Password" />
            <x-inputs.checked name="remember" id="remember">Remember me</x-inputs.checked>
            <x-inputs.button type="submit">Login</x-inputs.button>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
