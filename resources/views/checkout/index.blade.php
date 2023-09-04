<x-app-layout>
  <div class="mx-auto min-h-screen max-w-screen-xl p-6">
    <section class="flex flex-col items-center">
      <h1 class="font-heebo text-2xl font-semibold">CHECKOUT TICKET</h1>
      <div class="flex flex-col items-center sm:flex-row sm:items-start sm:gap-2">
        <h2>{{ $ticket->event->name }}</h2>
        <h2 class="hidden sm:block">•</h2>
        <h2>{{ \Carbon\Carbon::parse($ticket->event->date)->format('l, d F Y') }}</h2>
      </div>
    </section>

    <section class="my-8">

      <form>
        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
        @auth
          <input type="hidden" name="ticket_buyer_id" value="{{ Auth::user()->ticketBuyer->id }}">
        @endauth
        <div class="flex flex-col gap-2">
          <h2 class="font-heebo text-2xl font-semibold">Informasi Kontak</h2>
          <h3 class="font-heebo font-medium opacity-60">
            Masukkan informasi kontak anda untuk memudahkan kami menghubungi anda jika terjadi masalah.
          </h3>
          <div class="flex flex-col gap-6 rounded-lg border border-gray-200 bg-white px-6 py-8 shadow">
            <div>
              <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Alamat Email
              </label>
              <input type="email" id="email"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="john.doe@company.com" required @auth value="{{ Auth::user()->email }}" @endauth>
            </div>
            <div>
              <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Nama Lengkap
              </label>
              <input type="text" id="full_name"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="John" required @auth value="{{ Auth::user()->name }}" @endauth>
            </div>
            <div>
              <label for="phone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Nomor Telepon
              </label>
              <input type="tel" id="phone"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                @auth value="{{ Auth::user()->ticketBuyer->phone_number }}" @endauth required>
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-2">
          <h2 class="font-heebo text-2xl font-semibold">Rincian Pembelian</h2>
          <h3 class="font-heebo font-medium opacity-60">
            Rincian pembelian tiket anda.
          </h3>
          <div class="flex flex-col gap-6 rounded-lg border border-gray-200 bg-white px-6 py-8 text-lg shadow">
            <div class="flex flex-col gap-2">
              <div class="flex justify-between text-sm">
                <p>{{ $ticket->event->name }}</p>
                <p class="font-semibold">{{ Helper::convertCurrency($ticket->price) }}</p>
                <input type="hidden" name="price" value="{{ $ticket->price }}">
              </div>
              <div class="flex justify-between text-sm">
                <p>Kode Unik</p>
                <p class="font-semibold">{{ Helper::convertCurrency($kode_unik) }}</p>
                <input type="hidden" name="unique_code" value="{{ $kode_unik }}">
              </div>
              <div class="my-3 h-0.5 w-full bg-gray-200"></div>
              <div class="flex justify-between font-semibold">
                <p>Total</p>
                <p>{{ Helper::convertCurrency($ticket->price + $kode_unik) }}</p>
                <input type="hidden" name="unique_code" value="{{ $ticket->price + $kode_unik }}">
              </div>
              <button type="submit"
                class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Lanjutkan
                Pembayaran
              </button>
            </div>
          </div>
        </div>

      </form>

      <form action="">
        <div class="mb-4 flex flex-col gap-1">
        </div>
      </form>

      {{-- @foreach ($payment_method as $p)
        <option value="{{ $p->id }}">{{ $p->name }}</option>
      @endforeach --}}

    </section>
  </div>
</x-app-layout>
