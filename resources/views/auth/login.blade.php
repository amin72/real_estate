@extends('layouts.app')


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
  <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">ورود به سایت</h1>

    <form method="POST" action="{{ route('login') }}" class="px-6 py-10">
      @csrf
      
      <!-- Phone number -->
      <div>
        <label for="phone">شماره تلفن</label>
        <input
          type="text"
          name="phone"
          value="{{ old('phone') }}"
          class="block mt-1 w-full rounded"
          required
          autofocus />
      </div>
      
      <!-- Password -->
      <div class="mt-4">
        <label for="password">رمز عبور</label>
        <input 
          type="password"
          name="password"
          class="block mt-1 w-full rounded"
          required
          autocomplete="current-password" />
      </div>
  
      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
          
          <input
            type="checkbox"
            name="remember"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          
          <span class="mr-2 text-sm text-gray-600">مرا به خاطر بسپار</span>
        </label>
      </div>
  
      <div class="flex flex-col mt-4">
        <button class="block px-4 py-2 text-white rounded bg-green-400 font-semibold tracking-wide">
          ورود
        </button>

        @if (Route::has('password.request'))
          <a class="block mt-6 font-semibold text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            رمز عبور خود را فراموش کرده اید؟
          </a>
        @endif
      </div>
    </form>
  </div>
</main>
  <!-- Session Status -->
  <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

  <!-- Validation Errors -->
  <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
@endsection