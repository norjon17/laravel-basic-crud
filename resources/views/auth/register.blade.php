@extends('layouts.app')

@section('content')
  <div class="flex justify-center w-full">
    <div class="shadow-md p-5 rounded-lg mt-10 flex flex-col gap-2 w-2/5">
      <p class="font-semibold text-2xl">Register</p>
      <div>
        <form action="{{ route('register') }}" method="post" class="flex flex-col gap-2">
          @csrf
          <x-inputs.text type="text" name="name" id="name" label="Name" value="{{ old('name') }}" />
          <x-inputs.text type="text" name="username" id="username" label="Username" value="{{ old('username') }}" />
          <x-inputs.text type="email" name="email" id="email" label="Email" value="{{ old('email') }}" />
          <x-inputs.text type="password" name="password" id="password" label="Password" />
          <x-inputs.text type="password" name="password_confirmation" id="password_confirmation"
            label="Confirm Password" />
          <x-inputs.button type="submit">Register</x-inputs.button>
        </form>
      </div>
    </div>
  </div>
@endsection
