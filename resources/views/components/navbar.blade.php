<nav class=" dark:bg-gray-900 py-2 shadow-md z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <div class="flex justify-center gap-12 items-center">
      <a href="{{ route('dashboard') }}" class="flex items-center">
        <img src="{{ asset('storage/images/Logo.png') }}" class="h-8 mr-3" alt="Craftive Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Craftive.id</span>
      </a>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

        </ul>
      </div>

    </div>
    <div class="flex justify-center items-center">
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        @auth

          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="font-semibold flex items-center space-x-2 text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-white dark:focus:ring-white"
            type="button">
            Hello, Arga
            <i class="fa-solid fa-chevron-down ml-4 text-gray-400"></i>
        </button>
          <!-- Dropdown menu -->
          <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">

              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
              </li>
            </ul>
          </div>
        @endauth
        @guest
          <ul
            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{ route('login') }}"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-secondary-purple transition-all duration-300 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">Login</a>
            </li>
            <li>
              <a href="{{ route('register') }}"
                class="block py-2 pl-3 pr-4 text-primary-purple rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-secondary-purple transition-all duration-300 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">Register</a>
            </li>
          </ul>
        @endguest
      </div>
    </div>
    <button data-collapse-toggle="navbar-default" type="button"
      class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</nav>
