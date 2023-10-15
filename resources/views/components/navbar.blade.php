<nav class="z-50 bg-white shadow-md">
  <div class="flex h-24 items-center justify-between gap-5 px-16">
    <a href="{{ route('dashboard') }}" class="flex items-center">
      <img src="{{ asset('storage/images/Logo.png') }}" class="h-16 w-16" alt="Craftive Logo" />
    </a>
    <div class="flex items-center justify-center">
      <a href="{{ route('dashboard') }}" class="group flex w-32 items-center justify-center gap-3 p-4 font-poppins">
        <i
          class="fa-solid fa-caret-right text-transparent transition-all duration-300 group-hover:text-primary-purple"></i>
        <p class="transition-all duration-300 group-hover:font-semibold group-hover:text-primary-orange">Home</p>
      </a>
      <a href="#event" class="group flex w-32 items-center justify-center gap-3 scroll-smooth p-4 font-poppins">
        <i
          class="fa-solid fa-caret-right text-transparent transition-all duration-300 group-hover:text-primary-purple"></i>
        <p class="transition-all duration-300 group-hover:font-semibold group-hover:text-primary-orange">Event</p>
      </a>
      <a href="#contact" class="group flex w-32 items-center justify-center gap-3 p-4 font-poppins">
        <i
          class="fa-solid fa-caret-right text-transparent transition-all duration-300 group-hover:text-primary-purple"></i>
        <p class="transition-all duration-300 group-hover:font-semibold group-hover:text-primary-orange">Contact</p>
      </a>
      <a href="#footer" class="group flex w-32 items-center justify-center gap-3 p-4 font-poppins">
        <i
          class="fa-solid fa-caret-right text-transparent transition-all duration-300 group-hover:text-primary-purple"></i>
        <p class="transition-all duration-300 group-hover:font-semibold group-hover:text-primary-orange">About Us</p>
      </a>
      <a href="{{ route('orders.index') }}" class="group flex w-32 items-center justify-center gap-3 p-4 font-poppins">
        <i
          class="fa-solid fa-caret-right text-transparent transition-all duration-300 group-hover:text-primary-purple"></i>
        <p class="transition-all duration-300 group-hover:font-semibold group-hover:text-primary-orange">Orders</p>
      </a>
    </div>
    <div class="flex items-center justify-end gap-7">
      @guest
        <a href="{{ route('login') }}">
          <button
            class="flex h-12 w-40 items-center justify-center rounded-md bg-primary-purple font-medium text-white active:bg-[#563085]">
            Login
          </button>
        </a>
        <a href="{{ route('register') }}">
          <button
            class="flex h-12 w-40 items-center justify-center rounded-md border-2 border-primary-purple font-medium text-primary-purple active:bg-[#563085]">
            Register
          </button>
        </a>
      @endguest
      @auth
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit"
            class="flex h-12 w-40 items-center justify-center rounded-md border-2 border-primary-purple font-medium text-primary-purple active:bg-[#563085]">
            Logout
          </button>
        </form>
      @endauth
    </div>
    <button data-collapse-toggle="navbar-default" type="button"
      class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</nav>

