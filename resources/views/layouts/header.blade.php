<nav class="bg-white drop-shadow-md p-4">
  <div class="flex justify-between">
    <ul class="flex items-center">
      <li>
        <a href="{{ route('home') }}" class="text-lg font-semibold">Home</a>
      </li>
    </ul>

    <ul class="flex items-center gap-2">
      <li>
        <a href="{{ route('student') }}" class="text-gray-700">Student Lists</a>
      </li>
      @auth
        <li>
          {{-- TODO: add user profile with update or change password --}}
          <a href="#" class="text-gray-700 font-semibold">{{ auth()->user()->name }}</a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-gray-700">Logout</button>
          </form>
        </li>
      @endauth
      @guest
        <li>
          <a href="{{ route('register') }}" class="text-gray-700">Register</a>
        </li>
        <li>
          <a href="{{ route('login') }}" class="text-gray-700">Login</a>
        </li>
      @endguest
    </ul>
  </div>
</nav>
