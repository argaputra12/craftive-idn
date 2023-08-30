<x-app-layout>
  <section class="bg-center bg-no-repeat bg-blend-multiply bg-cover py-8"
    style="background-image: url('{{ asset('storage/images/bg-events.png') }}')">
    <div class="max-w-screen-xl mx-auto">
      <div class="relative w-full flex justify-center mb-10">
        <img class="max-h-[470px] w-full rounded-2xl" src="{{ asset('storage/images/bali-arts.jpg') }}"
          alt="image description">
        <button data-modal-target="eventImage" data-modal-toggle="eventImage" type="button"
          class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity duration-300 rounded-2xl flex justify-center items-center text-3xl font-bold text-white">Klik
          untuk melihat lebih jelas</button>

        <!-- Event Image modal -->
        <div id="eventImage" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
          class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Event Name
                </h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                  data-modal-hide="eventImage">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
                <img class="rounded-xl" src="{{ asset('storage/images/bali-arts.jpg') }}" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-between gap-4">
        <div class="w-3/5 flex flex-col gap-2 px-3">
          <div class="font-semibold">
            {{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}
          </div>
          <div class="font-bold font-heebo text-5xl mb-6">
            {{ $event->name }}
          </div>
          <div class="">
            {{ $event->description }}
          </div>
          <div class="flex flex-col gap-3 my-6">
            <h2 class="font-bold text-2xl">Tanggal dan Waktu</h2>
            <div class="flex gap-3 items-center px-1">
              <i class="fa-regular fa-calendar fa-lg"></i>
              <p>{{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}
                {{ \Carbon\Carbon::parse($event->date)->format('h:i A') }} WIB</p>
            </div>
          </div>
          <div class="flex flex-col gap-3 my-6">
            <h2 class="font-bold text-2xl">Lokasi</h2>
            <div class="flex gap-3 items-center px-1">
              <i class="fa-solid fa-location-crosshairs fa-lg"></i>
              <p class="capitalize">{{ $event->location }}, {{ $event->city }}, {{ $event->province }}</p>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-1/3 gap-4">
          @foreach ($tickets as $ticket)
            <form action="{{ route('checkout.index', ['id' => $ticket->id]) }}">
              <div class=" border-primary-purple border-4 rounded-xl flex flex-col gap-2 py-3 px-5">
                <h5 class="font-bold text-xl mb-5">Pesan Tiket Sekarang!</h5>
                <h2 class="font-bold text-2xl">{{ $event->name }}</h2>
                <h5 class="font-semibold text-gray-500 mb-5">{{ \Carbon\Carbon::parse($event->date)->format('l, d F Y') }}</h5>
                <h6>
                  <span class="font-bold">Harga Tiket:</span> Rp. {{ $ticket->price }}
                </h6>
              </div>
              <button
                class="w-full mt-3 h-10 bg-orange-500 hover:bg-primary-orange rounded-lg text-white font-bold transition-colors duration-300">Beli
                Tiket</button>
            </form>
          @endforeach

        </div>
      </div>
    </div>
  </section>

</x-app-layout>
