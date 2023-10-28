<x-app-layout>
  <section class="bg-cover bg-center bg-no-repeat py-8 bg-blend-multiply"
    style="background-image: url('{{ asset('storage/images/bg-events.png') }}')">
    <div class="mx-auto max-w-screen-xl">
      <div class="relative mb-10 flex w-full justify-center rounded-lg bg-black">
        <img class="max-h-[470px]" src="{{ asset($event->image_url) }}" alt="image description">
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
                  {{ $event->name }}
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
                <img class="rounded-xl" src="{{ asset($event->image_url) }}" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-between gap-4">
        <div class="flex w-3/5 flex-col gap-2 px-3">
          <div class="font-semibold">
            {{ date('l, d F Y', strtotime($event->date)) }}
          </div>
          <div class="mb-6 font-heebo text-5xl font-bold">
            {{ $event->name }}
          </div>
          <div class="">
            {!! nl2br($event->description) !!}
          </div>
          <div class="my-6 flex flex-col gap-3">
            <h2 class="text-2xl font-bold">Tanggal dan Waktu</h2>
            <div class="flex items-center gap-3 px-1">
              <i class="fa-regular fa-calendar fa-lg"></i>
              <p>{{ date('l, d F Y', strtotime($event->date)) }},
                {{ date('h : i A', strtotime($event->date)) }} WIB</p>
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
        <div class="flex w-1/3 flex-col gap-8">
          @foreach ($tickets as $ticket)
            @if (
                $ticket->stock > 0 &&
                    ($ticket->registration_closed_at == '0000-00-00 00:00:00' ||
                        $ticket->registration_closed_at > now()->setTimezone('Asia/Bangkok')))
              <form action="{{ route('orders.create', ['id' => $ticket->id]) }}">
                <div class="flex flex-col gap-2 rounded-xl border-4 border-primary-purple px-5 py-3">
                  <h2 class="text-2xl font-bold">{{ $event->name }}</h2>
                  @if ($ticket->registration_closed_at == '0000-00-00 00:00:00')
                    <span class="text-sm font-light">(Pendaftaran dibuka sampai
                      {{ date('d F Y, h:i A', strtotime($event->date)) }})</span>
                  @else
                    <span class="text-sm font-light">(Pendaftaran dibuka sampai
                      {{ date('d F Y, h:i A', strtotime($ticket->registration_closed_at)) }})</span>
                  @endif
                  <h3 class="text-lg font-medium text-red-500">{{ $ticket->name }}</h3>
                  <h5 class="mb-5 font-semibold text-gray-500">
                    {{ date('l, d F Y', strtotime($event->date)) }}
                  </h5>
                  <h6 class="@if ($ticket->stock <= 5) text-red-500 @endif">
                    <span class="font-bold">Stok:</span>
                    {{ $ticket->stock }}
                  </h6>
                  <h6>
                    <span class="font-bold">Harga Tiket:</span>
                    {{ Helper::convertCurrency($ticket->price) }}
                  </h6>
                </div>
                @if ($event->date < now()->setTimezone('Asia/Bangkok') || $ticket->registration_closed_at < now()->setTimezone('Asia/Bangkok'))
                  <div class="mt-3 text-sm text-red-500">
                    <span class="font-medium">Pendaftaran telah ditutup</span>
                  </div>
                @else
                  <button
                    class="mt-3 h-10 w-full rounded-lg bg-orange-500 font-bold text-white transition-colors duration-300 hover:bg-primary-orange">
                    Beli Tiket
                  </button>
                @endif
              </form>
            @endif
          @endforeach

        </div>
      </div>
    </div>
  </section>

</x-app-layout>

