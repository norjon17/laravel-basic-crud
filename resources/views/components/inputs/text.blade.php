@props(['label', 'type', 'id', 'name', 'placeholder', 'required' => false, 'fullWidth' => false, 'error', 'value'])
<div class="flex flex-col">
  <div class="flex flex-row items-center w-full gap-2">
    @isset($label)
      <label for="{{ $id }}"
        class=" break-words
          @isset($name)
            @error($name)
              text-red-500
            @enderror
          @endisset"
        style="flex: 0.3">{{ $label }}</label>
    @endisset
    <input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $name }}"
      class="px-2 py-1 flex-1 bg-gray-100 rounded-lg border-solid border-2 border-gray-300 focus:ring-blue-500  
        hover:border-blue-400 focus:border-blue-700 focus:outline-none
          @isset($name)
            @error($name)
              border-red-500
            @enderror
          @endisset"
      placeholder="{{ $placeholder ?? '' }}" {{-- required={{ $required }} --}} value="{{ $value ?? '' }}" style="flex: 1;" />
  </div>
  {{-- check if name is define and then check for errors --}}
  {{-- <span class="text-red-500">error message here</span> --}}
  @isset($name)
    @error($name)
      <span class="text-red-500">{{ $message }}</span>
    @enderror
  @endisset
</div>
