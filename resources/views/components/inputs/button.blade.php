@props(['type'])

<button type="{{ $type ?? 'button' }}" class="bg-sky-500 text-white font-semibold rounded-lg py-2 px-3 hover:bg-sky-700">
  {{ $slot }}
</button>
