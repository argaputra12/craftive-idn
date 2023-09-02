use Illuminate\Support\Facades\Auth;
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
          </svg>
        </button>
        <a href="{{ route('admin.dashboard') }}" class="flex items-center">
          <img src="{{ asset('storage/images/Logo.png') }}" class="h-8 mr-3" alt="Craftive Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Craftive.id</span>
        </a>
      </div>
      <div class="flex items-center">
        <div class="flex items-center ml-3">
          <div>
            <button type="button"
              class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
              aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                alt="user photo">
            </button>
          </div>
          <div
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
            id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-gray-900 dark:text-white" role="none">
                {{ Auth::user()->name }}
              </p>
              <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                {{ Auth::user()->email }}
              </p>
            </div>
            <ul class="py-1" role="none">
              <li>
                <form method="POST" action="{{ route('logout') }}"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  @csrf
                  <button>Sign Out</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="{{ route('admin.dashboard') }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-2">
          <div class="w-5 h-5 flex justify-center items-center">
            <i class="fa-solid fa-chart-pie fa-lg text-gray-500 group-hover:text-gray-900 transition duration-75"></i>
          </div>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.events') }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-2">
          <div class="w-5 h-5 flex items-center justify-start">
            <i
              class="fa-solid fa-calendar-day fa-lg text-gray-500 group-hover:text-gray-900 transition duration-75 w-5"></i>
          </div>
          <span class="ml-3">Events</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.categories') }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-2">
          <div class="w-5 h-5 flex items-center justify-start">
            <i
              class="fa-solid fa-tag fa-lg text-gray-500 group-hover:text-gray-900 transition duration-75 w-5"></i>
          </div>
          <span class="ml-3">Categories</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.tickets') }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-2">
          <div class="w-5 h-5 flex items-center justify-start">
            <i
              class="fa-solid fa-ticket-simple fa-lg text-gray-500 group-hover:text-gray-900 transition duration-75 w-5"></i>
          </div>
          <span class="ml-3">Ticket</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.bills') }}"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-2">
          <div class="w-5 h-5 flex items-center justify-start">
            <i
              class="fa-solid fa-file-invoice fa-lg text-gray-500 group-hover:text-gray-900 transition duration-75 w-5"></i>
          </div>
          <span class="ml-3">Bill</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
