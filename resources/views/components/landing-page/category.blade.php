@props(['value' => '', 'image' => ''])

<form action="{{ route('dashboard') }}" class="w-1/6">
  <div class="relative h-16">
    <div style="background-image: url('{{ $image }}');"
      class="absolute inset-0 bg-center bg-cover brightness-50 w-full h-full z-0 rounded-lg">
    </div>
    <button
      {{ $attributes->merge(['class' => 'relative flex flex-col w-full items-center justify-center rounded-lg py-4 px-5 text-center z-10 h-full']) }}
      type="submit">
      <input type="hidden" name="category" value="{{ $value }}">
      <p class="text-white font-medium">{{ $value }}</p>
    </button>
  </div>
</form>


