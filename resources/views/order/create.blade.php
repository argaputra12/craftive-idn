<x-app-layout>
  <div x-data="{ ticketCount: 1, ticketPrice: {{ $ticket->price }} }" class="mx-auto flex min-h-screen max-w-screen-xl flex-col-reverse gap-6 p-6 sm:flex-row">
    <section class="">
      <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
        <div class="flex flex-col gap-6">
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
                <input type="email" id="email" name="email"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="john.doe@company.com" required @auth value="{{ Auth::user()->email }}" @endauth>
              </div>
              <div>
                <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  Nama Lengkap
                </label>
                <input type="text" id="full_name" name="full_name"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="John" required @auth value="{{ Auth::user()->name }}" @endauth>
              </div>
              <div>
                <label for="phone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  Nomor Telepon
                </label>
                <input type="tel" id="phone" name="phone"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="081234567890" @auth value="{{ Auth::user()->phone_number }}" @endauth required>
              </div>
              <div>
                <label for="nik" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  NIK
                </label>
                <input type="nik" id="nik" name="nik"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="3116060312020012" required>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <h2 class="font-heebo text-2xl font-semibold">Jumlah Tiket</h2>
            <h3 class="font-heebo font-medium opacity-60">
              Masukkan jumlah tiket yang ingin anda beli.
            </h3>
            <div class="flex flex-col gap-6 rounded-lg border border-gray-200 bg-white px-6 py-8 shadow">
              <div>
                <label for="tiket" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  Tiket
                </label>
                <input type="number" id="tiket" x-model="ticketCount" name="quantity"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="1" required min="1" max="{{ $ticket->stock }}">
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
                  <p class="flex-1">{{ $ticket->event->name }} </p>
                  <p class="flex-[0.3_0.3_0%]">
                    <span>x </span>
                    <span x-text="ticketCount"></span>
                  </p>
                  <p class="font-semibold"
                    x-text="(ticketCount * ticketPrice).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })">
                  </p>
                </div>
                <div name="divider" class="my-3 h-0.5 w-full bg-gray-200">
                </div>
                <div class="flex justify-between font-semibold">
                  <p>Total Pembayaran</p>
                  <span
                    x-text="(ticketCount * ticketPrice).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })"></span>
                </div>
                <button type="submit"
                  class="h-10 w-full rounded-lg bg-orange-500 font-bold text-white transition-colors duration-300 hover:bg-primary-orange">Lanjutkan
                  Pembayaran
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </section>

    <section class="">
      <div
        class="flex w-full min-w-[20rem] flex-col items-start gap-2 rounded-xl border-4 border-primary-purple px-6 py-8">
        <h4 class="text-2xl font-bold">{{ $ticket->event->name }}</h4>
        <div name="divider" class="my-3 h-0.5 w-full bg-gray-200"></div>
        <h4 class="text-lg font-semibold text-gray-600">
          <span x-text="ticketCount"></span> <span> Tiket</span>
        </h4>
        <div name="divider" class="my-3 h-0.5 w-full bg-gray-200"></div>
        <h4 class="text-lg text-gray-500">Tanggal Dipilih</h4>
        <h4 class="font-semibold text-gray-600">
          {{ \Carbon\Carbon::parse($ticket->event->date)->translatedFormat('l, d F Y') }}</h4>
        <div name="divider" class="my-3 h-0.5 w-full bg-gray-200"></div>
        <div class="flex w-full place-content-between">
          <p class="font-bold">Total Pembayaran:</p>
          <p x-text="(ticketCount * ticketPrice).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })"></p>
        </div>
        </h6>
      </div>
    </section>
  </div>
</x-app-layout>
