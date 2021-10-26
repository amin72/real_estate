@extends('layouts.app')


@section('content')
<main class="sm:px-4 xl:px-32 mt-10">
  <div class="border border-gray-200 rounded">
    <h2 class="text-center text-2xl text-white bg-primary py-4 overflow-hidden">املاک ثبت شده توسط شما</h2>

    <div class="my-10 px-10">
      <ul class="list-decimal">
        <li class="py-4">
          <a href="#" class="hover:underline text-lg">ویلای خوشکل من</a>
          <p>این ملک در سایت ثبت شده است. جهت ویرایش یا حذف آن با مدیر سایت در تماس باشید.</p>
        </li>
        <li class="py-4">
          <a href="#" class="hover:underline text-lg">ویلای خوشکل من</a>
          <p>این ملک در سایت ثبت شده است. جهت ویرایش یا حذف آن با مدیر سایت در تماس باشید.</p>
        </li>
        <li class="py-4">
          <a href="#" class="hover:underline text-lg">ویلای خوشکل من</a>
          <div class="flex flex-col md:flex-row mt-3">
            <a href="#" class="block px-4 py-1 text-white bg-red-400 rounded md:ml-4 mb-4 md:mb-0 text-center">حذف</a>
            <a href="#" class="block px-4 py-1 text-white bg-green-400 rounded text-center">ویرایش</a>
          </div>
        </li>
        <li class="py-4">
          <a href="#" class="hover:underline text-lg">ویلای خوشکل من</a>
          <div class="flex flex-col md:flex-row mt-3">
            <a href="#" class="block px-4 py-1 text-white bg-red-400 rounded md:ml-4 mb-4 md:mb-0 text-center">حذف</a>
            <a href="#" class="block px-4 py-1 text-white bg-green-400 rounded text-center">ویرایش</a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="border border-gray-200 rounded my-10">
    <h2 class="text-center text-2xl text-white bg-primary py-4 mb-4">ویرایش اطلاعات کاربری</h2>
    
    <div class="my-10 px-10">
    <form action="" class="w-full md:w-1/2">
        <!-- Name -->
        <div>
          <label for="name">نام</label>
          <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <div class="mt-4">
          <button class="block px-4 py-2 text-white rounded bg-green-400 font-semibold tracking-wide">
            ارسال
          </button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection