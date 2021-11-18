@extends('layouts.app')


@section('title')
  خانه
@endsection


@section('content')
  <main class="sm:px-4 xl:px-32">
    <!-- search -->
    <section class="bg-secondary py-10 px-10 xl:px-32 text-center text-white mt-6 mb-10 sm:mx-2 md:mx-6">
      <h1 class="text-4xl">جستجوی در املاک ثبت شده</h1>
      <p class="text-xl my-6">در این قسمت می توانید ملک مورد نظر خود را براساس فیلترهای مورد نظر خود انتخاب کنید.</p>

      <form method="GET" action="{{ route('listings.index') }}" class="flex flex-col text-gray-800">
        <div class="flex flex-col md:flex-row mb-2">
          <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:ml-2 focus:outline-none" name="zone">
            <option value="empty">انتخاب نام منطقه</option>
            @foreach (\App\Models\Zone::where('published', true)->get() as $zone)
              <option value="{{ $zone->id }}">{{ $zone->name }}</option>
            @endforeach
          </select>

          <select class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:ml-2 focus:outline-none" name="type">
            <option value="empty">انتخاب نوع ملک</option>
            @foreach (\App\Models\Type::where('published', true)->get() as $type)
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>

          <select id="price" class="form-select appearance-none bg-left px-4 py-3 w-full my-2 rounded form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:ml-2 focus:outline-none" name="price">
            <option value="empty">انتخاب قیمت</option>
            @foreach (\App\Models\Price::where('published', true)->get() as $price)
              <option value="{{ $price->amount }}">{{ $price->amount }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <button class="bg-blue-500 px-3 py-2 rounded w-full my-2 text-white font-semibold text-lg">ارسال</button>
        </div>
      </form>
    </section>

    <!-- listing -->
    <section class="mt-20 flex flex-wrap">
      @foreach($listings as $listing)
        @include('partials.listing', ['listing' => $listing])
      @endforeach
    </section>
  </main>

  <!-- bottom desciption -->
  <section class="bg-secondary pb-16 px-10 xl:px-32 text-center text-white">
    <div class="flex flex-col lg:flex-row justify-between">
      <div class="w-full lg:w-1/3 px-8">
        <svg class="h-20 w-20 fill-current mx-auto mb-2 mt-10" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
          <path d="M640 384h512v-128h-512v128zm-352 0v1280h-64q-92 0-158-66t-66-158v-832q0-92 66-158t158-66h64zm1120 0v1280h-1024v-1280h128v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h128zm384 224v832q0 92-66 158t-158 66h-64v-1280h64q92 0 158 66t66 158z"/>
        </svg>
        <h3 class="py-4 text-2xl font-semibold border-t">فروش و اجاره</h3>
        <p class="text-xl px-10">ما در این سایت خدمات فروش و اجاره انواع خانه در سطح شهر رو ارايه می دهیم.</p>
      </div>
      <div class="w-full lg:w-1/3 px-8">
        <svg class="h-20 w-20 fill-current mx-auto mb-2 mt-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
          <path d="M 32 3 L 1 28 L 1.4921875 28.654297 C 2.8591875 30.477297 5.4694688 30.791703 7.2304688 29.345703 L 32 9 L 56.769531 29.345703 C 58.530531 30.791703 61.140812 30.477297 62.507812 28.654297 L 63 28 L 54 20.742188 L 54 8 L 45 8 L 45 13.484375 L 32 3 z M 32 13 L 8 32 L 8 56 L 56 56 L 56 35 L 32 13 z M 26 34 L 38 34 L 38 52 L 26 52 L 26 34 z"/>
        </svg>
        <h3 class="py-4 text-2xl font-semibold border-t">فروش و اجاره</h3>
        <p class="text-xl px-10">ما در این سایت خدمات فروش و اجاره انواع خانه در سطح شهر رو ارايه می دهیم.</p>
      </div>
      <div class="w-full lg:w-1/3 px-8">
        <svg class="h-20 w-20 fill-current mx-auto mb-2 mt-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
          <path d="M 25 4 C 12.316406 4 2 12.972656 2 24 C 2 30.1875 5.335938 36.066406 10.949219 39.839844 C 10.816406 40.890625 10.285156 43.441406 8.183594 46.425781 L 7.078125 47.992188 L 9.054688 48 C 14.484375 48 18.15625 44.671875 19.363281 43.394531 C 21.195313 43.796875 23.089844 44 25 44 C 37.683594 44 48 35.027344 48 24 C 48 12.972656 37.683594 4 25 4 Z"/>
        </svg>
        <h3 class="py-4 text-2xl font-semibold border-t">فروش و اجاره</h3>
        <p class="text-xl px-10">ما در این سایت خدمات فروش و اجاره انواع خانه در سطح شهر رو ارايه می دهیم.</p>
      </div>
    </div>
  </section>
@endsection


@section('bottom_scripts')
  <script>
    $("#price option").each(function() {
      formatElementPrice($(this))
    });
  </script>
@endsection
