@extends('layouts.app')

@section('content')
  <div class="flex flex-col items-center mt-10">
    <h1 class="font-bold text-2xl">Student list</h1>
    <div>
      <x-inputs.link url="{{ route('student.new') }}">Create New Student</x-inputs.link>
    </div>
    <div class="flex flex-col items-center w-full p-5">
      @if ($students->count() > 0)
        <table class="w-1/2">
          <thead>
            <tr>
              <th class="mx-5">
                Name
              </th>
              <th class="mx-5">
                Surname
              </th>
              <th class="mx-5">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
              <tr>
                <td class="mx-5">{{ $student->first_name }}</td>
                <td class="mx-5">{{ $student->last_name }}</td>
                <td class="mx-5 flex justify-evenly">
                  <a class="bg-gray-500 rounded-lg px-2 py-1 text-white mx-1"
                    href="{{ route('student.update', $student->id) }}">edit</a>
                  <form action="{{ route('student.delete', $student->id) }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-500 rounded-lg px-2 py-1 text-white mx-1"
                      onclick="return confirm('Do you want to delete this?')">delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
        Empty
      @endif
    </div>
  </div>
@endsection
