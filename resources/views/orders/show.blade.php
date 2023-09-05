<x-app-layout>
  <div class="mx-auto max-w-screen-xl">
    <div class="mt-8">
      <h2 class="font-heebo text-2xl font-semibold">Pesanan Anda</h2>

    </div>
    {{-- <section class="my-2 flex flex-col gap-4">
      @foreach ($orders as $order)
        <div
          class="{{ $order->status == 'pending' ? 'border-primary-purple' : ($order->status == 'paid' ? 'border-primary-green' : 'border-primary-orange') }} flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 px-6 py-8">
          <div class="flex w-full flex-col">
            <div class="flex w-full place-content-between">
              <h4 class="text-2xl font-bold">{{ $order->ticket->event->name }}</h4>
              <h5 class="text-lg font-semibold uppercase text-gray-600">{{ $order->status }}</h5>
            </div>
            <h4 class="text-lg font-bold">
              {{ $order->ticket->event->city }} -
              {{ \Carbon\Carbon::parse($order->ticket->event->date)->translatedFormat('l, d F Y') }}</h4>
            </h4>
          </div>

          <div name="divider" class="my-3 h-0.5 w-full bg-gray-200"></div>

          <div class="flex w-full justify-between text-lg font-semibold">
            <p>Total Pembayaran</p>
            <p>
              {{ Helper::convertCurrency($order->total_price) }}
            </p>
          </div>
          <a href="{{ $order->invoice_url }}" class="mt-4 h-10 w-full"
            {{ $order->status == 'pending' ? '' : 'disabled' }}>
            <button type="button" {{ $order->status == 'pending' ? '' : 'disabled' }}
              class="h-10 w-full rounded-lg bg-orange-500 font-bold text-white transition-colors duration-300 hover:bg-primary-orange disabled:cursor-not-allowed disabled:opacity-50 disabled:hover:bg-orange-500">
              Lanjutkan Pembayaran
            </button>
          </a>
        </div>
      @endforeach

    </section> --}}
  </div>
</x-app-layout>
