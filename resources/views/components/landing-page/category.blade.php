<form action="{{ route('dashboard') }}"
  class="mb-2 mr-2 flex h-14 w-[24%] items-center gap-4 rounded-lg bg-gradient-to-br from-secondary-purple to-secondary-yellow py-4 pl-5 pr-8 text-center text-sm hover:outline hover:outline-1 hover:outline-primary-purple focus:outline-none focus:ring-4 focus:ring-purple-500">
  <button type="submit" class="flex h-full w-full items-center gap-4">
    {{ $slot }}
  </button>
</form>
