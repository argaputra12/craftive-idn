@props([
    'id' => '1',
])

<div
  class="max-w-[23%] rounded-lg border border-gray-200 bg-white shadow transition-all duration-300 hover:drop-shadow-xl dark:border-gray-700 dark:bg-gray-800">
  <a href="{{ route('events.index', ['id' => $id]) }}">
    <div>
      {{ $image }}
    </div>
    <div class="flex flex-col gap-1 p-5">
      <div>
        {{ $title }}
      </div>
      <p class="text-sm font-semibold text-primary-purple">
        {{ $date }}
      </p>
      <p class="text-base text-gray-500">
        {{ $location }}
      </p>
      <p class="mt-2 text-base font-semibold text-gray-600">
        {{ $price }}
      </p>
      {{-- </a> --}}
    </div>
</div>
