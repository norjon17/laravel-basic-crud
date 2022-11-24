@props(['label', 'type', 'id', 'name', 'placeholder', 'required' => false, 'fullWidth' => false, 'value' => '', 'error'])
<div class="flex flex-col mb-6 ">
  @isset($label)
    <label for="{{ $id }}"
      class="mb-1
    @isset($name)
      @error($name)
        text-red-500
      @enderror
    @endisset">{{ $label }}</label>
  @endisset
  <input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $name }}"
    class="p-2.5 bg-gray-100 rounded-lg border-solid border-2 border-gray-300 focus:ring-blue-500 hover:border-blue-400 focus:border-blue-700 focus:outline-none
     @isset($name)
      @error($name)
        border-red-500
      @enderror
    @endisset
    "
    @isset($placeholder)
      placeholder="{{ $placeholder }}"
    @endisset {{-- required={{ $required }} --}}
    value={{ $value }}>
  {{-- check if name is define and then check for errors --}}
  @isset($name)
    @error($name)
      <span class="text-red-500">{{ $message }}</span>
    @enderror
  @endisset
</div>
