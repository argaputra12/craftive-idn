@extends('layouts.admin')

@section('content')
  <div class="flex w-full flex-col gap-4">
    <h1 class="mb-6 font-heebo text-2xl font-semibold">Edit Event</h1>
    <form action="{{ route('admin.events.update', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="w-1/2">
        <div class="mb-6">
          <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Event</label>
          <input type="text" id="name" name="name" value="{{ $event->name }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('name'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('name') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Deskripsi
            Event</label>
          <textarea id="description" name="description"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>{{ $event->description }}</textarea>
          @if ($errors->has('description'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('description') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="category" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
          <select id="category" name="categories[]"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500">
            <option selected>Pilih Kategori</option>
            @foreach ($categories as $category)
              @if ($event->eventCategory[0]->category_id == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-6">
          <label for="date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Waktu dan
            Tanggal</label>
          <input type="datetime-local" id="date" name="date" value="{{ $event->date }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('date'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('date') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="location" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Lokasi Event</label>
          <input type="location" id="location" name="location" value="{{ $event->location }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('location'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('location') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="city" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kota</label>
          <input type="city" id="city" name="city" value="{{ $event->city }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('city'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('city') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label for="province" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
          <input type="province" id="province" name="province" value="{{ $event->province }}"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-purple-500 focus:ring-purple-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-purple-500 dark:focus:ring-purple-500"
            required>
          @if ($errors->has('province'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('province') }}</span></p>
          @endif
        </div>
        <div class="mb-6">
          <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="image">Event image</label>
          <input
            class="block w-full cursor-pointer rounded-lg border border-purple-300 bg-purple-50 text-sm text-purple-900 focus:outline-none dark:border-purple-600 dark:bg-purple-700 dark:text-purple-400 dark:placeholder-purple-400"
            id="image" type="file" accept="image/*" name="image" >
          @if ($errors->has('image'))
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                class="font-medium">{{ $errors->first('image') }}</span></p>
          @endif
        </div>

        <button type="submit"
          class="w-full rounded-lg bg-purple-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800 sm:w-auto">Submit</button>
      </div>
    </form>

  </div>
@endsection

