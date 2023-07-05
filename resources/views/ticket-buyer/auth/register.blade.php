@extends('layouts.auth')

@section('content')
  <div class="bg-white rounded-3xl shadow-xl flex justify-between items-center max-w-5xl">
    <form method="POST" action="{{ route('register') }}" class=" px-16 w-1/2">
      @csrf

      <div class="font-bold text-2xl text-center mb-8 text-primary-purple">
        Register as Ticket Buyer
      </div>

      <!-- Name -->
      <div class="mt-4">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <i class="fa-solid fa-user fa-sm text-gray-500"></i>
          </div>
          <input type="text" id="name" name="name"
            class="bg-purple-50 border border-secondary-purple text-gray-900 text-sm rounded-lg focus:ring-primary-purple focus:border-primary-purple block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-purple dark:focus:border-primary-purple"
            placeholder="John Doe">
        </div>
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <i class="fa-solid fa-envelope fa-sm text-gray-500"></i>
          </div>
          <input type="email" id="email" name="email"
            class="bg-purple-50 border border-secondary-purple text-gray-900 text-sm rounded-lg focus:ring-primary-purple focus:border-primary-purple block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-purple dark:focus:border-primary-purple"
            placeholder="example@example.net">
        </div>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <i class="fa-solid fa-lock fa-sm text-gray-500"></i>
          </div>
          <input type="password" id="password" name="password"
            class="bg-purple-50 border border-secondary-purple text-gray-900 text-sm rounded-lg focus:ring-primary-purple focus:border-primary-purple block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-purple dark:focus:border-primary-purple"
            placeholder="•••••••">
        </div>
      </div>

      <!-- Password Confirmation -->
      <div class="mt-4">
        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
          Confirmation</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <i class="fa-solid fa-lock fa-sm text-gray-500"></i>
          </div>
          <input type="password" id="password_contirmation" name="password_confirmation"
            class="bg-purple-50 border border-secondary-purple text-gray-900 text-sm rounded-lg focus:ring-primary-purple focus:border-primary-purple block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-purple dark:focus:border-primary-purple"
            placeholder="•••••••">
        </div>
      </div>

      <div class="flex items-center justify-end mt-6 gap-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          href="{{ route('login') }}">
          {{ __('Already registered?') }}
        </a>
        <button class="inline-flex items-center px-4 py-2 bg-primary-purple border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondary-purple focus:bg-primary-purple hover:text-primary-purple focus:outline-none focus:ring-2 focus:ring-primary-purple focus:ring-offset-2 transition ease-in-out duration-150">
            Register
        </button>
      </div>
    </form>
    <div class="w-1/2">
      <div class="relative h-full">
        <img src="{{ asset('storage/images/bali-arts.jpg') }}" alt="event organizer"
          class="object-cover h-[600px] rounded-r-xl shadow-xl transition-all duration-300 hover:grayscale">
      </div>
    </div>
  </div>
@endsection
