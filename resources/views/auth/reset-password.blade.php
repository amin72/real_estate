@extends('layouts.app')


@section('title')
  تغییر رمز عبور
@endsection


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
  <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="mb-10 text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">تغییر رمز عبور</h1>

    <form method="POST" action="{{ route('password.update') }}" class="px-6 mb-10">
      @csrf
      
      <!-- Password -->
      <div class="mt-4">
        <label for="password">رمز عبور جدید</label>
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

            @if ($message == 'The password must be at least 5 characters.')
              @include('partials.error_message', ['message' => 'رمزهای وارد شده بسیار کوتاه است. حداقل طول باید ۵ کاراکتر باشد.'])
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
        <button class="block px-4 py-2 text-white rounded bg-secondary font-semibold tracking-wide">
          ارسال
        </button>
      </div>
    </form>
  </div>
</main>

<!-- Session Status -->
<!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

<!-- Validation Errors -->
<!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
@endsection
