@extends('layouts.admin')

@section('content')
  <div class="flex w-full flex-col gap-4">
    @if (session('success'))
      <div class="mb-6 rounded-lg bg-green-500 p-4 text-center text-white">
        {{ session('success') }}
      </div>
    @endif
    <h1 class="font-heebo text-2xl font-semibold">Categories</h1>
    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.categories.create') }}"
        class="flex items-center justify-center rounded-md bg-purple-600 px-4 py-2 text-sm font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
        Tambah Kategori
      </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Id
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Kategori
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
              <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                {{ $category->id }}
              </th>
              <td class="px-6 py-4">
                {{ $category->name }}
              </td>
              <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $categories->links() }}
    </div>
  </div>
@endsection
