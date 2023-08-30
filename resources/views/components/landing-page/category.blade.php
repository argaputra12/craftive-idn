<form action="http://127.0.0.1:8000"
  class="w-[24%] h-14 bg-gradient-to-br from-secondary-purple to-secondary-yellow hover:outline hover:outline-1 hover:outline-primary-purple focus:ring-4 focus:outline-none focus:ring-purple-500 rounded-lg pl-5 pr-8 py-4 text-center mr-2 mb-2 flex items-center gap-4 text-sm">
  <button type="submit" class="w-full h-full flex items-center gap-4">
    {{ $slot }}
  </button>
</form>
