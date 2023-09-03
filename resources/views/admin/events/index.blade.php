@extends('layouts.admin')

@section('content')
  <div class="flex flex-col gap-4 w-full">
    @if (session('success'))
      <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
        {{ session('success') }}
      </div>
    @endif
    <h1 class="font-semibold text-2xl font-heebo">Events</h1>
    <div class="flex flex-row justify-end gap-4">
      <a href="{{ route('admin.events.create') }}"
        class="px-4 py-2 text-white bg-purple-600 rounded-md hover:bg-purple-700">Tambah Event</a>
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
              Kategori
            </th>
            <th scope="col" class="px-6 py-3">
              Deskripsi
            </th>
            <th scope="col" class="px-6 py-3">
              Waktu dan Tanggal
            </th>
            <th scope="col" class="px-6 py-3">
              Lokasi Event
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $event->id }}
              </th>
              <td class="px-6 py-4">
                {{ $event->name }}
              </td>
              <td class="px-6 py-4">
                @foreach ($event->eventCategory as $eventCategory)
                  {{ $eventCategory->category_name }}
                @endforeach
              </td>
              <td class="px-6 py-4">
                {{ $event->description }}
              </td>
              <td class="px-6 py-4">
                {{ $event->date }}
              </td>
              <td class="px-6 py-4">
                {{ $event->location }}, {{ $event->city }}, {{ $event->province }}
              </td>
              <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $events->links() }}
  </div>
@endsection
