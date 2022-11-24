@extends('layouts.app')

@section('content')
  <div class="mt-5 flex justify-center">
    <div class=" rounded-lg p-10 shadow-md">
      <p>Welcome to Basic CRUD</p>
      <p>By Ronjon Capul</p>
      <x-inputs.link url="{{ route('student') }}">Go to Student Lists</x-link>
    </div>
  </div>
@endsection
