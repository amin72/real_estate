@extends('layouts.app')


@section('title')
  ارسال توکن تغییر رمز
@endsection


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
  <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="mb-10 text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">تغییر رمز عبور</h1>

    <div class="mb-4 text-gray-600 px-4">
      یک پیام حاوی توکن به شماره شما ارسال شد. توکن را در پایین وارد کنید.
    </div>

    <form
      method="POST"
      action="{{ route('verify_sms_token') }}"
      class="px-6 mb-10">
      @csrf
      
      <!-- SMS Token -->
      <div>
        <label for="sms_token">توکن</label>
        <input
          type="text"
          name="sms_token"
          value="{{ old('sms_token') }}"
          class="block mt-1 w-full rounded"
          maxlength="6"
          required
          autofocus />
          
          @error('sms_token')
            @include('partials.error_message', ['message' => $message])
          @enderror
          @error('sms_token.expired')
            @include('partials.error_message', ['message' => $message])
          @enderror
      </div>
  
      <div class="flex flex-col mt-4">
        <button class="block px-4 py-2 text-white rounded bg-secondary font-semibold tracking-wide">
          ارسال
        </button>
      </div>
    </form>

    <form action="{{ route('password.update-sms-token') }}" method="POST" class="px-6 mb-10">
      @csrf
      <button type="submit" class="block text-gray-600 hover:text-gray-900 md:mt-0 focus:outline-none">
        ارسال مجدد کد 
      </button>
    </form>

  </div>
</main>

<!-- Session Status -->
<!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

<!-- Validation Errors -->
<!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
@endsection
