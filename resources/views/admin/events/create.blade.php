@extends('layouts.admin')

@section('content')
  <div class="flex w-full flex-col gap-4">
    <h1 class="mb-6 font-heebo text-2xl font-semibold">Tambah Event</h1>
    <form action="{{ route('admin.events.store') }}" method="POST">
      @csrf
      <div class="w-1/2">
        <div class="mb-6">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Event</label>
          <input type="text" id="name" name="name"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('name'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('name') }}{{ $errors->first('name') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Deskripsi
            Event</label>
          <input type="text" id="description" name="description"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('description'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('description') }}{{ $errors->first('description') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="category" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
          <select id="category" name="categories[]"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500">
            <option selected>Pilih Kategori</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-6">
          <label for="date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Waktu dan
            Tanggal</label>
          <input type="datetime-local" id="date" name="date"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('date'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('date') }}{{ $errors->first('date') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="location" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Lokasi Event</label>
          <input type="location" id="location" name="location"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('location'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('location') }}{{ $errors->first('location') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kota</label>
          <input type="city" id="city" name="city"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('city'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('city') }}{{ $errors->first('city') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
          <input type="province" id="province" name="province"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('province'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('province') }}{{ $errors->first('province') }}</span></p>
          @endif
        </div>

        <button type="submit"
          class="w-full rounded-lg bg-purple-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 sm:w-auto">Submit</button>
      </div>
    </form>

  </div>
@endsection
