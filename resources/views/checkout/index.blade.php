<x-app-layout>
  <div class="mx-auto min-h-screen max-w-screen-xl p-6">
    <section class="flex flex-col items-center">
      <h1 class="font-heebo text-2xl font-semibold">CHECKOUT TICKET</h1>
      <h2>{{ $ticket->event->name }} • {{ \Carbon\Carbon::parse($ticket->event->date)->format('l, d F Y') }}</h2>
    </section>

    <section class="my-8">
      <form action="">
        <div class="mb-4 flex flex-col gap-1">
          <h3 class="font-heebo text-xl font-semibold">Informasi Kontak</h3>
          <p class="text-sm"><a href="{{ route('login') }}"
              class="text-primary-purple underline transition-colors duration-200 hover:text-secondary-purple">Masuk</a>
            untuk memudahkan anda.</p>
        </div>
        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
        @auth
          <input type="hidden" name="ticket_buyer_id" value="{{ Auth::user()->ticketBuyer->id }}">
        @endauth
        <div class="flex w-[700px] flex-col gap-4">
          <div class="flex w-full gap-8">
            <div class="group relative z-0 mb-6 w-full">
              <input type="email" name="email" id="email"
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-purple-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-purple-500"
                placeholder=" " required @auth
value="{{ Auth::user()->email }}" @endauth />
              <label for="email"
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-purple-600 dark:text-gray-400 peer-focus:dark:text-purple-500">Alamat
                Email
              </label>
            </div>
          </div>
          <div class="flex w-full justify-between gap-8">
            <div class="group relative z-0 mb-6 w-1/2">
              <input type="text" name="nama" id="nama"
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-purple-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-purple-500"
                placeholder=" " required @auth
value="{{ Auth::user()->name }}" @endauth />
              <label for="nama"
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-purple-600 dark:text-gray-400 peer-focus:dark:text-purple-500">Nama</label>
            </div>
            <div class="group relative z-0 mb-6 w-1/2">
              <input type="text" name="phone_number" required id="phone_number"
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-purple-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-purple-500"
                placeholder=" " required @auth
value="{{ Auth::user()->ticketBuyer->phone_number }}" @endauth />
              <label for="phone_number"
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-purple-600 dark:text-gray-400 peer-focus:dark:text-purple-500">Nomor
                Telepon</label>
            </div>
          </div>
          <div class="group relative z-0 mb-6 w-full">
            <label for="payment_method" class="sr-only">Metode Pembayaran</label>
            <select id="payment_method"
              class="peer block w-full appearance-none border-0 border-b-2 border-purple-200 bg-transparent px-0 py-2.5 text-sm text-gray-500 focus:border-purple-200 focus:outline-none focus:ring-0 dark:border-purple-700 dark:text-purple-400">
              <option selected>Pilih metode pembayaran</option>
              @foreach ($payment_method as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="my-8 w-[500px]">
          <h3 class="mb-6 font-heebo text-xl font-semibold">Rincian Pembelian</h3>
          <div class="flex flex-col gap-4">
            <div class="flex justify-between text-sm">
              <p>{{ $ticket->event->name }}</p>
              <p>Rp {{ $ticket->price }}</p>
              <input type="hidden" name="price" value="{{ $ticket->price }}">
            </div>
            <div class="mb-3 flex justify-between text-sm">
              <p>Kode Unik</p>
              <p>Rp {{ $kode_unik }}</p>
              <input type="hidden" name="unique_code" value="{{ $kode_unik }}">
            </div>
            <div class="flex justify-between font-semibold">
              <p>Total</p>
              <p>Rp {{ $ticket->price + $kode_unik }}</p>
              <input type="hidden" name="unique_code" value="{{ $ticket->price + $kode_unik }}">
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
</x-app-layout>
