<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basic CRUD</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <header>
    @include('layouts.header')
  </header>
  @yield('content')
</body>

</html>
