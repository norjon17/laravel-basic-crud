{{-- use props to pass data and to assign default data use this 
  'url'=>'example.com'
  --}}
@props(['url'])

<a href="{{ $url }}" class="text-blue-500 font-medium hover:underline">{{ $slot }}</a>
