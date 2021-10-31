@extends('layouts.app')


@section('bottom_scripts')
<script src="{{ asset('js/main.js') }}"></script>
@endsection


@section('content')
  <main class="sm:px-4 xl:px-32 mt-10">
    <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
      <h1 class="text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">افزودن ملک</h1>

      {{ $errors }}

      <form method="POST" action="{{ route('listings.store') }}" class="px-6 py-10" onsubmit="unFormatPrice()" enctype="multipart/form-data">
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
          <label for="price">قیمت (تومان)</label>
          <input
            type="text"
            id="price"
            name="price"
            class="block mt-1 w-full rounded tracking-widest"
            onkeyup="formatInputPrice(this)"
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
              value="1"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>

          <label for="has_store" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_store"
              value="0"
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
              value="1"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>

          <label for="has_garage" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_garage"
              value="0"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2">
          </label>
        </div>

        <!-- Categories -->
        <div class="block mt-6">
          <span>دسته بندی</span>
          <div>
            <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded" name="category_id" required>
              <option value="empty">-----</option>
              @foreach (\App\Models\Category::where('published', true)->get() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          @error('category_id')
            <div class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Categories -->
        <div class="block mt-6">
          <span>نوع ملک</span>
          <div>
            <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded" name="type_id" required>
              <option value="empty">-----</option>
              @foreach (\App\Models\Type::where('published', true)->get() as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
            </select>
          </div>
          @error('category_id')
            <div class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <!-- Description -->
        <div class="mt-4">
          <label for="description">توضیحات</label>
          <textarea
            name="description"
            class="block mt-1 w-full rounded" rows="5"></textarea>
        </div>

        <!-- image -->
        <div class="mt-6">
          <label class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
            </svg>
            
            <span class="mt-2 text-base leading-normal">تصویر اصلی</span>
            <input type="file" name="image" class="hidden" accept="image/*" required />
          </label>
        </div>

        <div class="flex flex-wrap space-between">
          <!-- image_1 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_1" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_2 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_2" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_3 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_3" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_4 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_4" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_5 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_5" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_6 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span class="mt-2 text-base leading-normal">افزودن تصویر</span>
              <input type="file" name="image_6" class="hidden" accept="image/*"/>
            </label>
          </div>
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


@section('bottom_scripts')
  <script>
    // format price field
    formatInputPrice($("#price")[0])
  </script>
@endsection