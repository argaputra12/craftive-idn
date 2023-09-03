@extends('layouts.admin')

@section('content')
  <div class="flex flex-col gap-4 w-full">
    @if (session('success'))
      <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('success') }}
      </div>
    @endif
    <h1 class="font-semibold text-2xl font-heebo">Tickets</h1>
    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.tickets.create') }}"
        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
        Tambah Ticket
      </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Id
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Event
            </th>
            <th scope="col" class="px-6 py-3">
              Stok
            </th>
            <th scope="col" class="px-6 py-3">
              Harga Ticket
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($events as $event)
            @foreach ($event->tickets as $tickets)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $tickets->id }}
                </th>
                <td class="px-6 py-4">
                  {{ $event->name }}
                </td>
                <td class="px-6 py-4">
                  {{ $tickets->stock }}
                </td>
                <td class="px-6 py-4">
                  {{ $tickets->price }}
                </td>
                <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
              </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $events->links() }}
  </div>
@endsection
