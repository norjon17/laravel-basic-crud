@props(['type', 'variant' => 'primary'])


{{-- TODO: update this button with variaty of designs --}}
@php
  function getClass($variant)
  {
      switch ($variant) {
          case 'value':
              return 'bg-sky-500 text-white hover:bg-sky-700';
          default:
              return 'bg-sky-500 text-white hover:bg-sky-700';
      }
  }
@endphp

<button type="{{ $type ?? 'button' }}" class="{{ getClass($variant) }} font-semibold rounded-lg py-2 px-3 ">
  {{ $slot }}
</button>
