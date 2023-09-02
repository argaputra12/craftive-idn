 @extends('layouts.auth')

 @section('content')
   <div class="bg-white rounded-3xl shadow-xl flex justify-between items-center max-w-5xl">
     <form method="POST" action="{{ route('login') }}" class=" px-16 w-1/2">
       @csrf

       <div class="font-bold text-2xl text-center mb-8 text-primary-purple">
         Login Existing Account
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
         @error('email')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
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
         @error('password')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
       </div>

       <div class="block mt-4">
         <label for="remember_me" class="inline-flex items-center">
           <input id="remember_me" type="checkbox"
             class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
           <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
         </label>
       </div>

       <div class="flex items-center justify-end mt-6 gap-4">
         <div class="flex items-center gap-2 text-gray-600">
           <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
             href="{{ route('register') }}">
             {{ __('Dont have an account?') }}
           </a>
           {{-- <p>or</p>
            <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              href="{{ route('eo.login') }}">
              {{ __('Login as EO?') }}
            </a> --}}
         </div>
         <button
           class="inline-flex items-center px-4 py-2 bg-primary-purple border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondary-purple focus:bg-primary-purple hover:text-primary-purple focus:outline-none focus:ring-2 focus:ring-primary-purple focus:ring-offset-2 transition ease-in-out duration-150">
           Login
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
