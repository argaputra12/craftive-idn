<x-app-layout>
  <section class="bg-cover bg-center bg-no-repeat py-8 bg-blend-multiply"
    style="background-image: url('{{ asset('storage/images/bg-events.png') }}')">
    <div class="mx-auto max-w-screen-xl">
      <div class="relative mb-10 flex w-full justify-center">
        <img class="max-h-[470px] w-full rounded-2xl" src="{{ asset('storage/images/bali-arts.jpg') }}"
          alt="image description">
        <button data-modal-target="eventImage" data-modal-toggle="eventImage" type="button"
          class="absolute inset-0 flex items-center justify-center rounded-2xl bg-black text-3xl font-bold text-white opacity-0 transition-opacity duration-300 hover:opacity-50">Klik
          untuk melihat lebih jelas</button>

        <!-- Event Image modal -->
        <div id="eventImage" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
          class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
          <div class="relative max-h-full w-full max-w-2xl">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Event Name
                </h3>
                <button type="button"
                  class="ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                  data-modal-hide="eventImage">
                  <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="space-y-6 p-6">
                <img class="rounded-xl" src="{{ asset('storage/images/bali-arts.jpg') }}" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-between gap-4">
        <div class="flex w-3/5 flex-col gap-2 px-3">
          <div class="font-semibold">
            {{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}
          </div>
          <div class="mb-6 font-heebo text-5xl font-bold">
            {{ $event->name }}
          </div>
          <div class="">
            {{ $event->description }}
          </div>
          <div class="my-6 flex flex-col gap-3">
            <h2 class="text-2xl font-bold">Tanggal dan Waktu</h2>
            <div class="flex items-center gap-3 px-1">
              <i class="fa-regular fa-calendar fa-lg"></i>
              <p>{{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}
                {{ \Carbon\Carbon::parse($event->date)->format('h:i A') }} WIB</p>
            </div>
          </div>
          <div class="my-6 flex flex-col gap-3">
            <h2 class="text-2xl font-bold">Lokasi</h2>
            <div class="flex items-center gap-3 px-1">
              <i class="fa-solid fa-location-crosshairs fa-lg"></i>
              <p class="capitalize">{{ $event->location }}, {{ $event->city }}, {{ $event->province }}
              </p>
            </div>
          </div>
        </div>
        <div class="flex w-1/3 flex-col gap-4">
          @foreach ($tickets as $ticket)
            <form action="{{ route('orders.create', ['id' => $ticket->id]) }}">
              <div class="flex flex-col gap-2 rounded-xl border-4 border-primary-purple px-5 py-3">
                <h2 class="text-2xl font-bold">{{ $event->name }}</h2>
                <h5 class="mb-5 font-semibold text-gray-500">
                  {{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}</h5>
                <h6>
                  <span class="font-bold">Harga Tiket:</span>
                  {{ Helper::convertCurrency($ticket->price) }}
                </h6>
              </div>
              <button
                class="mt-3 h-10 w-full rounded-lg bg-orange-500 font-bold text-white transition-colors duration-300 hover:bg-primary-orange">
                Beli Tiket
              </button>
            </form>
          @endforeach

        </div>
      </div>
    </div>
  </section>

</x-app-layout>
