@extends('layouts.admin')

@section('content')
  <div class="flex flex-col gap-4 w-full">
    <h1 class="font-semibold text-2xl font-heebo mb-6">Tambah Tiket</h1>

    <form action="{{ route('admin.tickets.store') }}" method="POST">
      @csrf
      <div class="w-1/2">
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Event</label>
          <input type="text" id="event_name" name="event_name" list="events"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
            required>
          <datalist id="events">
            @foreach ($events as $event)
              <option value="{{ $event->name }}">
            @endforeach
          </datalist>
          @if ($errors->has('event_name'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('event_name') }}{{ $errors->first('event_name') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
          <input type="number" id="stock" name="stock"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
            required>
          @if ($errors->has('stock'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('stock') }}{{ $errors->first('stock') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
          <input type="number" id="price" name="price"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
            required>
          @if ($errors->has('price'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('price') }}{{ $errors->first('price') }}</span></p>
          @endif
        </div>

        <button type="submit"
          class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Submit</button>
      </div>
    </form>

  </div>
@endsection
