@extends('layouts.app')

@section('content')
  <div class="flex flex-col items-center mt-10">
    <h1 class="font-bold text-2xl">Student list</h1>
    @auth
      <div>
        <x-inputs.link url="{{ route('student.new') }}">Create New Student</x-inputs.link>
      </div>
    @endauth
    <div class="flex flex-col items-center w-full p-5">
      @if ($students->count() > 0)
        <div class="w-full flex flex-col items-center gap-2">
          <table class="table-auto w-1/2">
            <thead class="text-left uppercase bg-gray-200">
              <tr class="border">
                <th>
                  Name
                </th>
                <th>
                  Surname
                </th>
                @auth
                  <th>
                    Action
                  </th>
                @endauth
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr class="border">
                  <td>{{ $student->first_name }}</td>
                  <td>{{ $student->last_name }}</td>
                  @auth
                    <td class="flex justify-evenly">
                      {{-- TODO: Update Link and Button design below with icons --}}
                      <a class="bg-gray-500 rounded-lg px-2 py-1 text-white mx-1"
                        href="{{ route('student.update', $student->id) }}">edit</a>
                      <form action="{{ route('student.delete', $student->id) }}" method="post">
                        @csrf
                        <button type="submit" class="bg-red-500 rounded-lg px-2 py-1 text-white mx-1"
                          onclick="return confirm('Do you want to delete this?')">delete</button>
                      </form>
                    </td>
                  @endauth
                </tr>
              @endforeach
            </tbody>



          </table>
          <div>
            <div>
              {{ $students->links() }}
            </div>
          </div>
        </div>
      @else
        Empty
      @endif
    </div>
  </div>
@endsection
