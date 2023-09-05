<x-app-layout>
  <div class="mx-auto mb-12 max-w-screen-xl">
    <div class="mt-8 flex place-content-between">
      <h2 class="font-heebo text-2xl font-semibold">Pesanan Anda</h2>

      <button id="dropdownFilterButton" data-dropdown-toggle="dropdownFilter"
        class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium capitalize text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        {{ Request::get('status') ?? 'Filter status' }}
        <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 4 4 4-4" />
        </svg>
      </button>
      <!-- Dropdown menu -->
      <div id="dropdownFilter"
        class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownFilterButton">
          <li>
            <a href="{{ route('orders.index') }}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
              Semua
            </a>
          </li>
          <li>
            <a href="{{ route('orders.index', ['status' => 'pending']) }}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
              Pending
            </a>
          </li>
          <li>
            <a href="{{ route('orders.index', ['status' => 'paid']) }}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
              Paid
            </a>
          </li>
          <li>
            <a href="{{ route('orders.index', ['status' => 'expired']) }}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
              Expired
            </a>
          </li>
        </ul>
      </div>

    </div>
    <section class="my-2 flex flex-col gap-4">
      @foreach ($orders as $order)
        <div
          class="{{ $order->status == 'pending' ? 'border-primary-purple' : ($order->status == 'paid' ? 'border-primary-orange' : 'border-gray-400 opacity-60') }} flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 px-6 py-8">
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
          @if ($order->status == 'paid')
            <a href="{{ route('orders.show', ['id' => $order->id]) }}" class="mt-4 h-10 w-full">
              <button type="button"
                class="h-10 w-full rounded-lg bg-orange-500 font-bold text-white transition-colors duration-300 hover:bg-primary-orange disabled:cursor-not-allowed disabled:opacity-50 disabled:hover:bg-orange-500">
                Lihat Detail
              </button>
            </a>
          @else
            <div x-data="countdown" x-init="startCountdown('{{ $order->created_at }}')" class="w-full">
              <div x-show="@json($order->status === 'pending')" class="mt-4 h-10 w-full">
                <a href="{{ $order->invoice_url }}">
                  <button type="button" {{ $order->status == 'pending' ? '' : 'disabled' }}
                    class="h-10 w-full rounded-lg bg-purple-500 font-bold text-white transition-colors duration-300 hover:bg-primary-purple disabled:cursor-not-allowed disabled:bg-gray-500 disabled:hover:bg-gray-500">
                    Pembayaran Berakhir dalam
                    <span x-text="displayTime"></span>
                  </button>
                </a>
              </div>

              <div x-show="@json($order->status === 'expired')" class="mt-4 h-10 w-full">
                <button type="button" disabled
                  class="h-10 w-full cursor-not-allowed rounded-lg bg-red-500 font-bold text-white">
                  Expired
                </button>
              </div>
            </div>
          @endif

        </div>
      @endforeach
      <div class="w-full">
        {{ $orders->links() }}
      </div>
    </section>
  </div>
</x-app-layout>

<script>
  function countdown() {
    return {
      remainingTime: 0,
      displayTime: '00:00',

      startCountdown(orderCreatedTime) {
        const endTimeMs = new Date(orderCreatedTime).getTime() + 1 * 60 * 60 * 1000;
        const currentTimeMs = new Date().getTime();
        const timezoneOffsetMs = new Date().getTimezoneOffset() * 60 * 1000;

        const currentTimeAdjustedMs = currentTimeMs + timezoneOffsetMs;

        const timeDifferenceSeconds = Math.max(Math.floor((endTimeMs - currentTimeAdjustedMs) / 1000));
        this.remainingTime = timeDifferenceSeconds;
        this.updateDisplayTime();

        const countdownInterval = setInterval(() => {
          this.remainingTime--;

          if (this.remainingTime <= 0) {
            clearInterval(countdownInterval);
            this.displayTime = '00:00';
          } else {
            this.updateDisplayTime();
          }
        }, 1000);
      },

      updateDisplayTime() {
        const minutes = Math.floor(this.remainingTime / 60);
        const seconds = this.remainingTime % 60;
        this.displayTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
      },
    };
  }
</script>
