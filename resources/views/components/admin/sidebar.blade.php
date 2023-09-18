use Illuminate\Support\Facades\Auth;
<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
          </svg>
        </button>
        <a href="{{ route('admin.dashboard') }}" class="flex items-center">
          <img src="{{ asset('storage/images/Logo.png') }}" class="mr-3 h-8" alt="Craftive Logo" />
          <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Craftive.id</span>
        </a>
      </div>
      <div class="flex items-center">
        <div class="ml-3 flex items-center">
          <div>
            <button type="button"
              class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
              aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                alt="user photo">
            </button>
          </div>
          <div
            class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
            id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-gray-900 dark:text-white" role="none">
                {{ Auth::user()->name }}
              </p>
              <p class="truncate text-sm font-medium text-gray-900 dark:text-gray-300" role="none">
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
  class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform dark:border-gray-700 dark:bg-gray-800 sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="{{ route('admin.dashboard') }}"
          class="group flex items-center gap-2 rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <div class="flex h-5 w-5 items-center justify-center">
            <i class="fa-solid fa-chart-pie fa-lg text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
          </div>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.events') }}"
          class="group flex items-center gap-2 rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <div class="flex h-5 w-5 items-center justify-start">
            <i
              class="fa-solid fa-calendar-day fa-lg w-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
          </div>
          <span class="ml-3">Events</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.categories') }}"
          class="group flex items-center gap-2 rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <div class="flex h-5 w-5 items-center justify-start">
            <i class="fa-solid fa-tag fa-lg w-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
          </div>
          <span class="ml-3">Categories</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.tickets') }}"
          class="group flex items-center gap-2 rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <div class="flex h-5 w-5 items-center justify-start">
            <i
              class="fa-solid fa-ticket-simple fa-lg w-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
          </div>
          <span class="ml-3">Tickets</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.orders') }}"
          class="group flex items-center gap-2 rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
          <div class="flex h-5 w-5 items-center justify-start">
            <i
              class="fa-solid fa-file-invoice fa-lg w-5 text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
          </div>
          <span class="ml-3">Orders</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
