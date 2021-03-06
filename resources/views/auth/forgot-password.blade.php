@extends('layouts.app')


@section('title')
  تغییر رمز عبور
@endsection


@section('content')
<main class="px-4 sm:px-32 md:px-40 lg:px-80 xl:px-96 my-16">
  <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
    <h1 class="mb-10 text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">تغییر رمز عبور</h1>

    <div class="mb-4 text-gray-600 px-4">
      اگر رمز عبور خود را فراموش کرده اید، شماره تماس خود که موقع ثبت نام استفاده کرده اید را در پایین وارد کنید.
    </div>

    @error('phone')
      @if ($message == 'These credentials do not match our records.')
        <div class="px-6 mt-4 mb-4 text-red-600">
          @include('partials.error_message', ['message' => 'اطلاعات وارد شده صحیح نیستند. لطفا دوباره امتحان کنید.'])
        </div>
      @endif
    @enderror

    <form method="POST" action="{{ route('password.phone') }}" class="px-6 mb-10">
      @csrf
      
      <!-- Phone number -->
      <div>
        <label for="phone">شماره تلفن</label>
        <input
          type="text"
          name="phone"
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
