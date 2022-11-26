@extends('layouts.app')

@section('content')
  <div class="flex flex-col items-center mt-10">
    <h1 class="font-bold text-2xl mb-2">Update the student</h1>
    <x-inputs.link url="{{ route('student') }}">Go back</x-inputs.link>
    <div class="w-2/5 p-2">
      @if (session('savedMessage'))
        <div class="bg-green-500 rounded-lg w-full text-center text-white p-1 my-2 font-semibold">
          {{ session('savedMessage') }}
        </div>
      @endif
      <x-forms.student action="{{ route('student.update', $student->id) }}" button_name="Update"
        first_name="{{ $student->first_name }}" last_name="{{ $student->last_name }}" />
    </div>
  </div>
@endsection
