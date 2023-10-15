@extends('layouts.admin')

@section('content')
  <div class="flex w-full flex-col gap-4">
    <h1 class="mb-6 font-heebo text-2xl font-semibold">Tambah Tiket</h1>

    <form action="{{ route('admin.tickets.store') }}" method="POST">
      @csrf
      <div class="w-1/2">
        <div class="mb-6">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Event</label>
          <input type="text" id="event_name" name="event_name" list="events"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          <datalist id="events">
            @foreach ($events as $event)
              <option value="{{ $event->name }}">
            @endforeach
          </datalist>
          @if ($errors->has('event_name'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('event_name') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Deskripsi Tiket</label>
          <input type="text" id="name" name="name"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('name'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('name') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="stock" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Stok</label>
          <input type="number" id="stock" name="stock"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('stock'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('stock') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Harga</label>
          <input type="number" id="price" name="price"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('price'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('price') }}</span></p>
          @endif
        </div>

        <button type="submit"
          class="w-full rounded-lg bg-purple-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 sm:w-auto">Submit</button>
      </div>
    </form>

  </div>
@endsection
