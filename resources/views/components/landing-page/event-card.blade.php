<div
  class="max-w-[23%] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:drop-shadow-xl transition-all duration-300">
  <div>
    {{ $image }}
  </div>
  <div class="p-5 flex flex-col gap-1">
    <div>
      {{ $title }}
    </div>
    <p class="font-semibold text-sm text-primary-purple">
      {{ $date }}
    </p>
    <p class="text-gray-500 text-base">
      {{ $location }}
    </p>
    <p class="text-gray-600 text-base mt-2 font-semibold">
      {{ $price }}
    </p>
  </div>
</div>
