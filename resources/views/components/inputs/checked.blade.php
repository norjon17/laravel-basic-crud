@props(['id' => 'checked', 'name' => 'checkbox'])
<div class="flex flex-row items-center gap-2">
  <input type="checkbox" name="{{ $name }}" id="{{ $id }}" class="w-4 h-4 accent-blue-500" />
  <label for="{{ $id }}" class="cursor-pointer">{{ $slot }}</label>
</div>
