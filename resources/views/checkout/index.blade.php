<x-app-layout>
  <div class="max-w-screen-xl mx-auto p-6 min-h-screen">
    <section class="flex flex-col items-center">
      <h1 class="font-semibold text-2xl font-heebo">CHECKOUT TICKET</h1>
      <h2>{{ $ticket->event->name }} • {{ \Carbon\Carbon::parse($ticket->event->date)->format('l, d F Y') }}</h2>
    </section>

    <section class="my-8">
      <form action="">
        <div class="flex flex-col gap-1 mb-4">
            <h3 class="text-xl font-heebo font-semibold">Informasi Kontak</h3>
            <p class="text-sm"><a href="{{ route('login') }}" class="underline text-primary-purple hover:text-secondary-purple transition-colors duration-200">Masuk</a> untuk memudahkan anda.</p>
        </div>
        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
        @auth
          <input type="hidden" name="ticket_buyer_id" value="{{ Auth::user()->ticketBuyer->id }}">
        @endauth
        <div class="flex flex-col gap-4 w-[700px]">
          <div class="flex gap-8 w-full">
            <div class="relative z-0 w-full mb-6 group">
              <input type="email" name="email" id="email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                placeholder=" " required @auth
value="{{ Auth::user()->email }}" @endauth />
              <label for="email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                Email
              </label>
            </div>
          </div>
          <div class="flex gap-8 w-full justify-between">
            <div class="relative z-0 w-1/2 mb-6 group">
              <input type="text" name="nama" id="nama"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                placeholder=" " required @auth
value="{{ Auth::user()->name }}" @endauth />
              <label for="nama"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
            </div>
            <div class="relative z-0 w-1/2 mb-6 group">
              <input type="text" name="phone_number" required id="phone_number"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                placeholder=" " required @auth
value="{{ Auth::user()->ticketBuyer->phone_number }}" @endauth />
              <label for="phone_number"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                Telepon</label>
            </div>
          </div>
          <div class="relative z-0 w-full mb-6 group">
            <label for="payment_method" class="sr-only">Metode Pembayaran</label>
            <select id="payment_method"
              class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-purple-200 appearance-none dark:text-purple-400 dark:border-purple-700 focus:outline-none focus:ring-0 focus:border-purple-200 peer">
              <option selected>Pilih metode pembayaran</option>
              @foreach ($payment_method as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="w-[500px] my-8">
          <h3 class="text-xl mb-6 font-heebo font-semibold">Rincian Pembelian</h3>
          <div class="flex flex-col gap-4">
            <div class="flex justify-between text-sm">
              <p>{{ $ticket->event->name }}</p>
              <p>Rp {{ $ticket->price }}</p>
              <input type="hidden" name="price" value="{{ $ticket->price }}">
            </div>
            <div class="flex justify-between mb-3 text-sm">
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
