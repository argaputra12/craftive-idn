@extends('layouts.admin')

@section('content')
  <div class="flex w-full flex-col gap-4">
    @if (session('success'))
      <div class="mb-6 rounded-lg bg-green-500 p-4 text-center text-white">
        {{ session('success') }}
      </div>
    @endif
    <h1 class="font-heebo text-2xl font-semibold">Orders</h1>
    <div class="flex flex-row justify-end gap-4">
      <a href="{{ route('admin.orders.create') }}"
        class="rounded-md bg-purple-600 px-4 py-2 text-white hover:bg-purple-700">Tambah order</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Id
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Pembeli
            </th>
            <th scope="col" class="px-6 py-3">
              Email
            </th>
            <th scope="col" class="px-6 py-3">
              No Telp
            </th>
            <th scope="col" class="px-6 py-3">
              NIK
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Event
            </th>
            <th scope="col" class="px-6 py-3">
              Id Ticket
            </th>
            <th scope="col" class="px-6 py-3">
              Jumlah Tiket
            </th>
            <th scope="col" class="px-6 py-3">
              Harga
            </th>
            <th scope="col" class="px-6 py-3">
              Total Harga
            </th>
            <th scope="col" class="px-6 py-3">
              Status
            </th>
            <th scope="col" class="px-6 py-3">
              Invoice URL
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
              <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                {{ $order->id }}
              </th>
              <td class="px-6 py-4">
                {{ $order->user->name }}
              </td>
              <td class="px-6 py-4">
                {{ $order->user->email }}
              </td>
              <td class="px-6 py-4">
                {{ $order->user->ticketBuyer->phone_number }}
              </td>
              <td class="px-6 py-4">
                {{ $order->user->nik }}
              </td>
              <td class="px-6 py-4">
                {{ $order->ticket->event->name }}
              </td>
              <td class="px-6 py-4">
                {{ $order->ticket->id }}
              </td>
              <td class="px-6 py-4">
                {{ $order->quantity }}
              </td>
              <td class="px-6 py-4">
                {{ $order->price }}
              </td>
              <td class="px-6 py-4">
                {{ $order->total_price }}
              </td>
              <td class="px-6 py-4">
                {{ $order->status }}
              </td>
              <td class="px-6 py-4">
                <a href="{{ $order->invoice_url }}" class="text-blue-600 hover:underline font-medium">
                  Klik di sini
                </a>
              </td>
              <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $orders->links() }}
  </div>
@endsection
