@extends('layouts.app')

@section('title')
  ثبت نام
@endsection


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
<div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">ثبت نام</h1>

    <form method="POST" action="{{ route('register') }}" class="px-6 py-10">
      @csrf
      
      <!-- Name -->
      <div>
        <label for="name">نام</label>
        <input
          type="text"
          name="name"
          value="{{ old('name') }}"
          class="block mt-1 w-full rounded"
          required
          autofocus />

          @error('name')
            <span class="block mt-2 text-red-600">
              {{
                $message == 'The name must not be greater than 40 characters.'
                  ? 'مقدار وارد شده طولانی است. حداکثر طول می تواند ۴۰ کاراکتر باشد.' : ''
              }}
            </span>
          @enderror
      </div>

      <div class="mt-4">
        <label for="phone">شماره تلفن</label>
        <input
          type="text"
          name="phone"
          value="{{ old('phone') }}"
          class="block mt-1 w-full rounded"
          minlength="11"
          maxlength="11"
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

          @error('password')
            @if ($message == 'The password confirmation does not match.')
              @include('partials.error_message', ['message' => 'رمز عبورهای وارد شده برابر نیستند.'])
            @endif

            @if ($message == 'The password must be at least 8 characters.')
              @include('partials.error_message', ['message' => 'رمزهای وارد شده بسیار کوتاه است. حداقل طول باید ۸ کاراکتر باشد.'])
            @endif
          @enderror
          
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <label for="password_confirmation">تکرار رمز عبور</label>
        <input 
          type="password"
          name="password_confirmation"
          class="block mt-1 w-full rounded"
          required
          autocomplete="current-password" />
      </div>
  
      <div class="flex flex-col mt-4">
        <button class="block px-4 py-2 text-white rounded bg-green-400 font-semibold tracking-wide">
          ثبت نام
        </button>

        <a class="block mt-6 font-semibold text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
          قبلا ثبت نام کرده اید؟
        </a>
      </div>
    </form>
  </div>
</main>
<!-- Validation Errors -->
<!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
@endsection