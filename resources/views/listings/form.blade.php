@extends('layouts.app')


@section('title')
  {{ $page_title }}
@endsection

@section('content')
  <main class="sm:px-4 xl:px-32 mt-10">
    <div class="w-full xl:w-1/2 mx-auto border-2 border-gray-200 rounded bg-white">
      <h1 class="text-3xl text-white bg-primary py-4 px-42 tracking-wide text-center">{{ $page_title }}</h1>

      {{ $errors }}

      <form method="POST" action="{{ $method == 'POST' ? route('listings.store') : route('listings.update', $listing->id) }}" class="px-6 py-10" onsubmit="unFormatPrice()" enctype="multipart/form-data">
        @csrf

        @if ($method === 'PUT')
          @method('PUT')
        @endif
        
        <!-- title -->
        <div>
          <label for="title">عنوان</label>
          <input
            type="text"
            name="title"
            value="{{ $listing_title ?? old('title') }}"
            class="block mt-1 w-full rounded"
            maxlength="30"
            required
            @if (! $listing_title)
              autofocus
            @endif
            >

            @error('title')
              @if ($message == 'The title must not be greater than 30 characters.')
                @include('partials.error_message', ['message' => 'عنوان آگهی حداکثر می تواند ۳۰ کاراکتر باشد.'])
              @endif
            @enderror
        </div>
        
        <!-- zone -->
        <div class="block mt-6">
          <span>انتخاب منطقه</span>
          <div>
            <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded" name="zone_id" required>
              <option value="empty">-----</option>
              @foreach (\App\Models\Zone::where('published', true)->get() as $zone)
                @if ($zone->name === $listing_zone)
                 <option value="{{ $zone->id }}" selected>{{ $zone->name }}</option>
                @else
                  <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          @error('zone_id')
            <div class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>

                <!-- Categories -->
                <div class="block mt-6">
          <span>دسته بندی</span>
          <div>
            <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded" name="category_id" id="category_id" required>
              <option value="empty">-----</option>
              @foreach (\App\Models\Category::where('published', true)->get() as $category)
                @if ($category->slug === $listing_category)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          @error('category_id')
            <div id="image_1" class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Types -->
        <div class="block mt-6">
          <span>نوع ملک</span>
          <div>
            <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded" name="type_id" required>
              <option value="empty">-----</option>
              @foreach (\App\Models\Type::where('published', true)->get() as $type)
                @if ($type->slug === $listing_type)
                  <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                @else
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          @error('zone_id')
            <div class="mt-2 text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <!-- Address -->
        <div class="mt-4">
          <label for="address">آدرس</label>
          <input
            type="text"
            name="address"
            class="block mt-1 w-full rounded"
            value="{{ $listing_address ?? old('address') }}"
            required>

            @error('address')
              @if ($message == 'The address must not be greater than 200 characters.')
                @include('partials.error_message', ['message' => 'آدرس حداکثر می تواند ۲۰۰ کاراکتر باشد.'])
              @endif
            @enderror

        </div>

        <!-- Zipcode -->
        <div class="mt-4">
          <label for="zipcode">کد پستی (بدون خط فاصله)</label>
          <input
            type="text"
            name="zipcode"
            class="block mt-1 w-full rounded"
            minlength="10"
            maxlength="10"
            value="{{ $listing_zipcode ?? old('zipcode') }}"
            required>
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
            value="{{ $listing_price ?? old('price') }}"
            required>
        </div>

        <!-- Price Monthly -->
        <div class="mt-4 hidden" id="price_monthly_div">
          <label for="price_monthly">اجاره ماهانه (تومان)</label>
          <input
            type="text"
            id="price_monthly"
            name="price_monthly"
            class="block mt-1 w-full rounded tracking-widest"
            onkeyup="formatInputPrice(this)"
            value="{{ $listing_price_monthly ? $listing_price_monthly ?? old('price_monthly') : 0 }}"
            required>
        </div>

        <!-- Bedrooms -->
        <div class="mt-4">
          <label for="bedrooms">تعداد اتاق خواب</label>
          <input
            type="number"
            name="bedrooms"
            class="block mt-1 w-full rounded"
            value="{{ $listing_bedrooms ?? old('bedrooms') }}"
            required>
        </div>

        <!-- Area -->
        <div class="mt-4">
          <label for="area">متراژ</label>
          <input
            type="number"
            name="area"
            class="block mt-1 w-full rounded"
            value="{{ $listing_area ?? old('area') }}"
            required>
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
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if ($listing_has_store)
                checked='checked'
              @endif
            >
          </label>

          <label for="has_store" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_store"
              value="0"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if (! $listing_has_store)
                checked='checked'
              @endif
            >
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
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if ($listing_has_garage)
                checked='checked'
              @endif
            >
          </label>

          <label for="has_garage" class="inline-flex items-center mr-10">
            <span class="ml-2 text-gray-800">خیر</span>
            <input
              type="radio"
              name="has_garage"
              value="0"
              class="border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if (! $listing_has_garage)
                checked='checked'
              @endif
            >
          </label>
        </div>

        <!-- Description -->
        <div class="mt-4">
          <label for="description">توضیحات</label>
          <textarea
            name="description"
            class="block mt-1 w-full rounded" rows="5">{{ $listing_description ?? old('description') }}</textarea>
        </div>

        <!-- Phone number -->
        <div class="mt-4">
          <label for="phone">شماره تلفن</label>
          <input
            type="text"
            name="phone"
            class="block mt-1 w-full rounded"
            minlength="11"
            maxlength="11"
            value="{{ $listing_phone ?? old('phone') }}"
            required>

          @error('phone')
            @if ($message == 'The phone format is invalid.')
              @include('partials.error_message', ['message' => 'شماره تلفن را صحیح وارد کنید. مثال: 09301234567'])
            @endif
          @enderror
        </div>

        <!-- Requested -->
        <div class="mt-4">
          <label for="requested" class="inline-flex items-center">
            <input
              id="requested"
              type="checkbox"
              name="requested"
              class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if ($listing_requested)
                checked='checked'
              @endif
            >
            <span class="mr-2 text-sm text-gray-600">درخواستی</span>
          </label>
        </div>

        <!-- Exchange -->
        <div class="mt-4">
          <label for="exchange" class="inline-flex items-center">
            <input
              id="exchange"
              type="checkbox"
              name="exchange"
              class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 border border-indigo-400 p-2"
              @if ($listing_exchange)
                checked='checked'
              @endif
            >
            <span class="mr-2 text-sm text-gray-600">معاوضه ملک</span>
          </label>
        </div>

        <!-- Image -->
        <div class="mt-6 {{ $listing_requested ? 'hidden' : '' }}" id="div_image">
          <label class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
            </svg>
            
            <span id="image_name" class="mt-2 text-sm leading-normal">تصویر اصلی</span>
            <input id="image" type="file" name="image" class="hidden" accept="image/*" />
          </label>

          @error('image')
            @if ($message == 'The image field is required unless requested is in on.')
              @include('partials.error_message', ['message' => 'تصویر اصلی الزامی است.'])
            @endif
          @enderror
        </div>

        <!-- Extra images -->
        <div class="flex flex-wrap space-between {{ $listing_requested ? 'hidden' : '' }}" id="div_images">
          <!-- image_1 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_1_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_1" type="file" name="image_1" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_2 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_2_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_2" type="file" name="image_2" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_3 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_3_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_3" type="file" name="image_3" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_4 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_4_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_4" type="file" name="image_4" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_5 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_5_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_5" type="file" name="image_5" class="hidden" accept="image/*"/>
            </label>
          </div>

          <!-- image_6 -->
          <div class="mt-6 w-1/2 sm:w-1/3 lg:w-1/6 xl:w-1/3">
            <label class="mx-auto w-32 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-primary hover:text-white text-primary ease-linear transition-all duration-150">
              <svg class="h-6 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1344 864q0-14-9-23l-352-352q-9-9-23-9t-23 9l-351 351q-10 12-10 24 0 14 9 23t23 9h224v352q0 13 9.5 22.5t22.5 9.5h192q13 0 22.5-9.5t9.5-22.5v-352h224q13 0 22.5-9.5t9.5-22.5zm640 288q0 159-112.5 271.5t-271.5 112.5h-1088q-185 0-316.5-131.5t-131.5-316.5q0-130 70-240t188-165q-2-30-2-43 0-212 150-362t362-150q156 0 285.5 87t188.5 231q71-62 166-62 106 0 181 75t75 181q0 76-41 138 130 31 213.5 135.5t83.5 238.5z"/>
              </svg>
              
              <span id="image_6_name" class="mt-2 text-sm leading-normal">افزودن تصویر</span>
              <input id="image_6" type="file" name="image_6" class="hidden" accept="image/*"/>
            </label>
          </div>
        </div>

        <div class="flex flex-col mt-4">
          <button class="block px-4 py-2 text-white rounded bg-secondary font-semibold tracking-wide">
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
    formatInputPrice($("#price_monthly")[0])

    $("#requested").change(function() {
      $("#div_image").toggleClass('hidden')
      $("#div_images").toggleClass('hidden')
    })

    $("#category_id").change(function() {
      var selectedCategory = $(this).find(":selected").text()
      if (selectedCategory == 'اجاره') {
        $("#price_monthly_div").removeClass('hidden')
      } else {
        $("#price_monthly_div").addClass('hidden')
      }
    })


    $("#image").change(function() {
      $("#image_name").text(this.files[0].name)
    });

    $("#image_1").change(function() {
      $("#image_1_name").text(this.files[0].name)
    });

    $("#image_2").change(function() {
      $("#image_2_name").text(this.files[0].name)
    });

    $("#image_3").change(function() {
      $("#image_3_name").text(this.files[0].name)
    });

    $("#image_4").change(function() {
      $("#image_4_name").text(this.files[0].name)
    });

    $("#image_5").change(function() {
      $("#image_5_name").text(this.files[0].name)
    });

    $("#image_6").change(function() {
      $("#image_6_name").text(this.files[0].name)
    });
  </script>
@endsection