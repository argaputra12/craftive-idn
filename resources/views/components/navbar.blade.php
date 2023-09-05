<nav class="z-50 py-2 shadow-md dark:bg-gray-900">
  <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
    <div class="flex items-center justify-center gap-12">
      <a href="{{ route('dashboard') }}" class="flex items-center">
        <img src="{{ asset('storage/images/Logo.png') }}" class="mr-3 h-8" alt="Craftive Logo" />
        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Craftive.id</span>
      </a>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">

        </ul>
      </div>

    </div>
    <div class="flex items-center justify-center">
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        @auth

          <button id="dropdownUserButton" data-dropdown-toggle="dropdownUser"
            class="flex items-center space-x-2 font-semibold text-gray-700 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white dark:focus:ring-white"
            type="button">
            Hello, {{ Auth::user()->name }}
            <i class="fa-solid fa-chevron-down ml-4 text-gray-400"></i>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownUser"
            class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserButton">
              <li>
                <a href="{{ route('orders.index') }}"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  Order
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  Sign Out
                </a>

              </li>
            </ul>
          </div>
        @endauth
        @guest
          <ul
            class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
            <li>
              <a href="{{ route('login') }}"
                class="block rounded py-2 pl-3 pr-4 font-bold text-gray-900 transition-all duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-secondary-purple md:dark:hover:bg-transparent">Login</a>
            </li>
            <li>
              <a href="{{ route('register') }}"
                class="block rounded py-2 pl-3 pr-4 font-bold text-primary-purple transition-all duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-secondary-purple md:dark:hover:bg-transparent">Register</a>
            </li>
          </ul>
        @endguest
      </div>
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
