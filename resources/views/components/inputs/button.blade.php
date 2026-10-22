@props(['type', 'variant' => 'primary'])

{{-- TODO: update this button with variaty of designs --}}
@php
  $variantClass = match ($variant) {
      'value' => 'bg-sky-500 text-white hover:bg-sky-700',
      default => 'bg-sky-500 text-white hover:bg-sky-700',
  };
@endphp

<button type="{{ $type ?? 'button' }}" class="{{ $variantClass }} font-semibold rounded-lg py-2 px-3 ">
  {{ $slot }}
</button>
