@extends('layouts.app')


@section('title')
  ورود به سایت
@endsection


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
  <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="mb-10 text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">ورود به سایت</h1>

    @error('phone')
      @if ($message == 'These credentials do not match our records.')
        <div class="px-6 mt-4 mb-4 text-red-600">
          @include('partials.error_message', ['message' => 'اطلاعات وارد شده صحیح نیستند. لطفا دوباره امتحان کنید.'])
        </div>
      @endif
    @enderror

    <form
      method="POST"
      action="{{ route('login') }}"
      onsubmit="change()"
      class="px-6 mb-10">
      @csrf
      
      <!-- Phone number -->
      <div>
        <label for="phone">شماره تلفن</label>
        <input
          type="text"
          name="phone"
          id="phone"
          value="{{ old('phone') }}"
          class="block mt-1 w-full rounded"
          placehoder="09301234567"
          required
          autofocus />
          
          @error('phone')
            @if ($message == 'The phone format is invalid.')
              @include('partials.error_message', ['message' => 'شماره تلفن را صحیح وارد کنید. مثال: 09301234567'])
            @endif
          @enderror
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
        <label for="remember" class="inline-flex items-center">
          <input
            id="remember"
            type="checkbox"
            name="remember"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          <span class="mr-2 text-sm text-gray-600">مرا به خاطر بسپار</span>
        </label>
      </div>
  
      <div class="flex flex-col mt-4">
        <button class="block px-4 py-2 text-white rounded bg-secondary font-semibold tracking-wide">
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