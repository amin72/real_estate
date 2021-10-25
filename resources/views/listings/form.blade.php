@extends('layouts.app')


@section('content')
  <main class="sm:px-4 xl:px-32 mt-10">
    <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
      <h1 class="text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">افزودن ملک</h1>

      <form method="POST" action="{{ route('listings.store') }}" class="px-6 py-10">
        @csrf
        
        <!-- title -->
        <div>
          <label for="title">عنوان</label>
          <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            class="block mt-1 w-full rounded"
            required
            autofocus />
        </div>
        
        <!-- City -->
        <div class="mt-4">
          <label for="city">شهر</label>
          <input
            type="text"
            name="city"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Address -->
        <div class="mt-4">
          <label for="address">آدرس</label>
          <input
            type="text"
            name="address"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Zipcode -->
        <div class="mt-4">
          <label for="zipcode">کد پستی (بدون خط فاصله)</label>
          <input
            type="text"
            name="zipcode"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Price -->
        <div class="mt-4">
          <label for="price">قیمت</label>
          <input
            type="number"
            name="price"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Bedrooms -->
        <div class="mt-4">
          <label for="bedrooms">تعداد اتاق خواب</label>
          <input
            type="number"
            name="bedrooms"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Sqft -->
        <div class="mt-4">
          <label for="sqft">متراژ</label>
          <input
            type="number"
            name="sqft"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <!-- Has store -->
        <div class="block mt-6">
          <span class="ml-12">انبار دارد؟</span>

          <label for="has_store" class="inline-flex items-center">
            <span class="ml-2 text-gray-800">بله</span>
            <input
              type="radio"
              name="has_store"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>

          <label for="has_store" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_store"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>
        </div>

        <!-- Has garage -->
        <div class="block mt-6">
          <span class="ml-12">پارکینگ دارد؟</span>

          <label for="has_garage" class="inline-flex items-center">
            <span class="ml-2 text-gray-800">بله</span>
            <input
              type="radio"
              name="has_garage"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>

          <label for="has_garage" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_garage"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>
        </div>

        <!-- Description -->
        <div class="mt-4">
          <label for="description">توضیحات</label>
          <textarea
            name="zipcode"
            class="block mt-1 w-full rounded" rows="5"></textarea>
        </div>

        <!-- image -->
        <div class="mt-4">
          <label for="image">تصویر</label>
          <input
            type="file"
            name="image"
            value="{{ old('image') }}"
            class="block mt-1 w-full rounded"
            required
            autofocus />
        </div>

        <div class="flex flex-col mt-4">
          <button class="block px-4 py-2 text-white rounded bg-green-400 font-semibold tracking-wide">
            ارسال
          </button>
        </div>
      </form>
    </div>
  </main>
@endsection