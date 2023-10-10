<x-app-layout>
  <div class="mx-auto max-w-screen-xl pb-8">
    <section class="my-2 flex flex-col gap-4">
      <div class="mt-8">
        <h2 class="font-heebo text-2xl font-semibold">Detail Event</h2>
      </div>
      <div
        class="flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 border-primary-orange px-6 py-8">
        <div class="flex w-full flex-col gap-2">
          <h4 class="text-2xl font-bold">{{ $order->ticket->event->name }}</h4>
          <h5 class="text-justify text-lg font-semibold opacity-70">{{ $order->ticket->event->description }}</h5>
          <div class="flex place-content-between text-lg font-bold">
            <p>Lokasi: </p>
            <p>{{ $order->ticket->event->location }}, {{ $order->ticket->event->city }},
              {{ $order->ticket->event->province }}
            </p>
          </div>
          <div class="flex place-content-between text-lg font-bold">
            <p>Waktu: </p>
            <p>
              {{ \Carbon\Carbon::parse($order->ticket->event->date)->translatedFormat('l, d F Y') }}</h4>
            </p>
          </div>
        </div>
    </section>

    <section class="my-2 flex flex-col gap-4">
      <div class="mt-8">
        <h2 class="font-heebo text-2xl font-semibold">Detail Pesanan</h2>
      </div>
      <div
        class="flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 border-primary-orange px-6 py-8">
        <div class="flex w-full flex-col gap-2">
          <div class="flex place-content-between text-lg font-bold">
            <p>Nama Pemesan: </p>
            <p>
              {{ $order->ticketBuyer->name }}
            </p>
          </div>
          <div class="flex place-content-between text-lg font-bold">
            <p>Nomor Telepon: </p>
            <p>
              {{ $order->ticketBuyer->phone_number }}
            </p>
          </div>
          <div class="flex place-content-between text-lg font-bold">
            <p>NIK: </p>
            <p>
              {{ $order->ticketBuyer->nik }}
            </p>
          </div>
          <div name="divider" class="my-3 h-0.5 w-full bg-gray-200"></div>
          <div class="flex place-content-between text-lg font-bold">
            <p>Jumlah Tiket: </p>
            <p>
              {{ $order->quantity }}
            </p>
          </div>
          <div class="flex place-content-between text-lg font-bold">
            <p>Total Pembayaran: </p>
            <p>
              {{ Helper::convertCurrency($order->total_price) }}
            </p>
          </div>
          <div class="flex place-content-between text-lg font-bold">
            <p>Status Pembayaran: </p>
            <p class="capitalize">
              {{ $order->status }}
            </p>
          </div>
          @if ($order->status == 'paid')
            <div class="flex place-content-between text-lg font-bold">
              <p>Dibayar pada: </p>
              <p>
                {{ \Carbon\Carbon::parse($order->paid_at)->translatedFormat('l, d F Y') }}</h4>

              </p>
            </div>
          @endif

        </div>
    </section>

    <section class="my-2 flex flex-col gap-4">
      <div class="mt-8">
        <h2 class="font-heebo text-2xl font-semibold">Detail Tiket</h2>
      </div>
      <div
        class="flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 border-primary-orange px-6 py-8">
        <div class="flex w-full flex-col gap-2">

        </div>
    </section>
  </div>
  </div>
</x-app-layout>
