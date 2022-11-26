@props(['action', 'button_name', 'first_name', 'last_name'])

<form action="{{ $action ?? '#' }}" method="post">
  @csrf
  <div class="flex flex-col gap-3">
    <x-inputs.text label="Your first name*" placeholder="Firstname" id="first_name" name="first_name"
      value="{{ $first_name ?? old('first_name') }}" error="{{ $error ?? '' }}" />
    <x-inputs.text label="Your last name*" placeholder="Lastname" id="last_name" name="last_name"
      value="{{ $last_name ?? old('last_name') }}" />
    <x-inputs.button type="submit">{{ $button_name ?? 'Submit' }}</x-inputs.button>
  </div>
</form>
