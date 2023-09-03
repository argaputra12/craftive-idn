@extends('layouts.auth')

@section('content')
  <div class="flex max-w-5xl items-center justify-between rounded-3xl bg-white shadow-xl">
    <form method="POST" action="{{ route('register') }}" class="w-1/2 px-16">
      @csrf

      <div class="mb-8 text-center text-2xl font-bold text-primary-purple">
        Register as Event Organizer
      </div>

      <!-- Name -->
      <div class="mt-4">
        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <div class="relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
            <i class="fa-solid fa-user fa-sm text-gray-500"></i>
          </div>
          <input type="text" id="name" name="name"
            class="block w-full rounded-lg border border-secondary-purple bg-purple-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-purple focus:ring-primary-purple dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-purple dark:focus:ring-primary-purple"
            placeholder="John Doe">
        </div>
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <div class="relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
            <i class="fa-solid fa-envelope fa-sm text-gray-500"></i>
          </div>
          <input type="email" id="email" name="email"
            class="block w-full rounded-lg border border-secondary-purple bg-purple-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-purple focus:ring-primary-purple dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-purple dark:focus:ring-primary-purple"
            placeholder="example@example.net">
        </div>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <div class="relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
            <i class="fa-solid fa-lock fa-sm text-gray-500"></i>
          </div>
          <input type="password" id="password" name="password"
            class="block w-full rounded-lg border border-secondary-purple bg-purple-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-purple focus:ring-primary-purple dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-purple dark:focus:ring-primary-purple"
            placeholder="•••••••">
        </div>
      </div>

      <!-- Password Confirmation -->
      <div class="mt-4">
        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password
          Confirmation</label>
        <div class="relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
            <i class="fa-solid fa-lock fa-sm text-gray-500"></i>
          </div>
          <input type="password" id="password_contirmation" name="password_confirmation"
            class="block w-full rounded-lg border border-secondary-purple bg-purple-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-purple focus:ring-primary-purple dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-purple dark:focus:ring-primary-purple"
            placeholder="•••••••">
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-4">
        <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          href="{{ route('login') }}">
          {{ __('Already registered?') }}
        </a>
        <button
          class="inline-flex items-center rounded-md border border-transparent bg-primary-purple px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-secondary-purple hover:text-primary-purple focus:bg-primary-purple focus:outline-none focus:ring-2 focus:ring-primary-purple focus:ring-offset-2">
          Register
        </button>
      </div>
    </form>
    <div class="w-1/2">
      <div class="relative h-full">
        <img src="{{ asset('storage/images/Event-Organizer.webp') }}" alt="event organizer"
          class="h-[600px] rounded-r-xl object-cover shadow-xl transition-all duration-300 hover:grayscale">
      </div>
    </div>
  </div>
@endsection
