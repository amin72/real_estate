@extends('layouts.app')


@section('styles')
<link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="bg-green-600 opacity-80 text-white px-8 sm:px-40 xl:px-96 py-16 text-center">
  <h1 class="text-5xl">{{ $listing->title }}</h1>
  <p class="text-2xl pt-6">{{ $listing->address }}</p>
</section>

<main class="px-8 sm:px-40 xl:px-96 my-10">
  <img src="{{ $listing->image }}" alt="" class="rounded">
  <!-- load images -->

  <!-- Thumbnails -->
  <div class="flex flex-row flex-wrap">
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_1 }}" data-lightbox="home-image-set">
      <img class="h-16 rounded" src="{{ $listing->image_1 }}" alt="">
    </a>
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_2 }}" data-lightbox="home-image-set" class="mr-6">
      <img class="h-16 rounded" src="{{ $listing->image_2 }}" alt="">
    </a>
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_3 }}" data-lightbox="home-image-set" class="mr-6">
      <img class="h-16 rounded" src="{{ $listing->image_3 }}" alt="">
    </a>
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_4 }}" data-lightbox="home-image-set" class="mr-6">
      <img class="h-16 rounded" src="{{ $listing->image_4 }}" alt="">
    </a>
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_5 }}" data-lightbox="home-image-set" class="mr-6">
      <img class="h-16 rounded" src="{{ $listing->image_5 }}" alt="">
    </a>
    <a class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 2xl:w-1/6 mt-4" href="{{ $listing->image_6 }}" data-lightbox="home-image-set" class="mr-6">
      <img class="h-16 rounded" src="{{ $listing->image_6 }}" alt="">
    </a>
  </div>

  <div class="text-green-400 my-10 flex flex-col md:flex-row flex-wrap justify-around">

    <!-- price -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-6 fill-current" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M832 1152h384v-96h-128v-448h-114l-148 137 77 80q42-37 55-57h2v288h-128v96zm512-256q0 70-21 142t-59.5 134-101.5 101-138 39-138-39-101.5-101-59.5-134-21-142 21-142 59.5-134 101.5-101 138-39 138 39 101.5 101 59.5 134 21 142zm512 256v-512q-106 0-181-75t-75-181h-1152q0 106-75 181t-181 75v512q106 0 181 75t75 181h1152q0-106 75-181t181-75zm128-832v1152q0 26-19 45t-45 19h-1792q-26 0-45-19t-19-45v-1152q0-26 19-45t45-19h1792q26 0 45 19t19 45z"/>
          </svg>
          <span class="mr-1">قیمت:</span>
        </div>
        <div class="">
          <span class="ml-1 tracking-widest">{{ $listing->price }}</span>
          تومان
        </div>
      </div>
    </div>

    <!-- sqft -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
          </svg>
          <span class="mr-1">متراژ:</span>
        </div>
        <div class="">
          <span class="ml-1 tracking-widest">{{ $listing->sqft }}</span>
          مترمربع
        </div>
      </div>
    </div>

    <!-- bedrooms -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          <span class="mr-1">اتاق خواب:</span>
        </div>
        <div class="">
          <span>{{ $listing->bedrooms }}</span>
        </div>
      </div>
    </div>

    <!-- has_garage -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
          </svg>
          <span class="mr-1">پارکینگ:</span>
        </div>
        <div class="">
        <span>{{ $listing->has_garage ? 'دارد' : 'ندارد' }}</span>
        </div>
      </div>
    </div>

    <!-- has_store -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-5 fill-current" viewBox="0 0 241.35 241.349" xmlns="http://www.w3.org/2000/svg">
            <path d="M205.38,11.465C205.38,5.143,200.237,0,193.913,0H47.435C41.113,0,35.97,5.143,35.97,11.465v197.322
              c0,6.324,5.144,11.467,11.465,11.467h146.479c6.324,0,11.467-5.143,11.467-11.467V11.465z M191.043,205.921H50.307V14.337h140.736V205.921z"/>
            <path d="M196.741,227.011H43.808c-3.962,0-7.168,3.211-7.168,7.169s3.206,7.169,7.168,7.169h152.933
              c3.958,0,7.169-3.211,7.169-7.169S200.699,227.011,196.741,227.011z"/>
            <path d="M72.483,169.369c3.962,0,7.168-3.211,7.168-7.169V67.208c0-3.958-3.206-7.169-7.168-7.169s-7.168,3.211-7.168,7.169
              v94.981C65.314,166.158,68.521,169.369,72.483,169.369z"/>
          </svg>
          <span class="mr-2">انبار:</span>
        </div>
        <div class="">
        <span>{{ $listing->has_store ? 'دارد' : 'ندارد' }}</span>
        </div>
      </div>
    </div>

    <!-- date -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-5 w-6 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"/>
          </svg>
          <span class="mr-1">تاریخ:</span>
        </div>
        <div class="">
          <span>{{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($listing->created_at->format('Y-m-d'))) }}</span>
        </div>
      </div>
    </div>

    <!-- bedrooms -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-6 w-6 fill-current"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
          	<path d="M20,21.569c-0.095,0-0.189-0.021-0.282-0.062L5.434,15.115C5.165,14.995,4.994,14.72,5,14.413
              c0.006-0.303,0.191-0.578,0.46-0.683l14.286-5.681C19.828,8.017,19.913,8,20,8c0.086,0,0.172,0.017,0.254,0.049l14.285,5.679
              c0.275,0.11,0.455,0.378,0.461,0.683c0.008,0.308-0.163,0.584-0.434,0.704L20.281,21.51C20.192,21.549,20.096,21.569,20,21.569
              L20,21.569z M7.626,14.468l12.339,5.522l12.409-5.522L20,9.549L7.626,14.468z"/>
            <path d="M5.434,20.49c-0.361-0.163-0.53-0.604-0.376-0.983c0.113-0.275,0.372-0.454,0.659-0.454c0.097,0,0.191,0.021,0.282,0.062
              l13.967,6.249l14.037-6.249c0.092-0.042,0.186-0.062,0.283-0.062c0.286,0,0.544,0.177,0.656,0.454
              c0.155,0.379-0.014,0.82-0.376,0.983L20,27.008L5.434,20.49z"/>
            <path d="M5.434,25.48c-0.362-0.164-0.531-0.604-0.376-0.981c0.113-0.275,0.372-0.454,0.659-0.454c0.097,0,0.191,0.021,0.282,0.061
              l13.967,6.25l14.037-6.25c0.09-0.039,0.186-0.061,0.283-0.061c0.286,0,0.544,0.179,0.656,0.454
		          c0.155,0.378-0.014,0.819-0.375,0.981L20,32L5.434,25.48z"/>
          </svg>
          <span class="mr-1">دسته بندی :</span>
        </div>
        <div class="">
          <span>{{ $listing->category->name }}</span>
        </div>
      </div>
    </div>

    <!-- bedrooms -->
    <div class="w-full md:w-1/2 mx-auto px-4">
      <div class="border-b flex flex-row justify-between py-2 px-4">
        <div class="flex flex-row items-center">
          <svg class="h-6 w-6 fill-current"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
          	<path d="M20,21.569c-0.095,0-0.189-0.021-0.282-0.062L5.434,15.115C5.165,14.995,4.994,14.72,5,14.413
              c0.006-0.303,0.191-0.578,0.46-0.683l14.286-5.681C19.828,8.017,19.913,8,20,8c0.086,0,0.172,0.017,0.254,0.049l14.285,5.679
              c0.275,0.11,0.455,0.378,0.461,0.683c0.008,0.308-0.163,0.584-0.434,0.704L20.281,21.51C20.192,21.549,20.096,21.569,20,21.569
              L20,21.569z M7.626,14.468l12.339,5.522l12.409-5.522L20,9.549L7.626,14.468z"/>
            <path d="M5.434,20.49c-0.361-0.163-0.53-0.604-0.376-0.983c0.113-0.275,0.372-0.454,0.659-0.454c0.097,0,0.191,0.021,0.282,0.062
              l13.967,6.249l14.037-6.249c0.092-0.042,0.186-0.062,0.283-0.062c0.286,0,0.544,0.177,0.656,0.454
              c0.155,0.379-0.014,0.82-0.376,0.983L20,27.008L5.434,20.49z"/>
            <path d="M5.434,25.48c-0.362-0.164-0.531-0.604-0.376-0.981c0.113-0.275,0.372-0.454,0.659-0.454c0.097,0,0.191,0.021,0.282,0.061
              l13.967,6.25l14.037-6.25c0.09-0.039,0.186-0.061,0.283-0.061c0.286,0,0.544,0.179,0.656,0.454
		          c0.155,0.378-0.014,0.819-0.375,0.981L20,32L5.434,25.48z"/>
          </svg>
          <span class="mr-1">نوع ملک :</span>
        </div>
        <div class="">
          <span>{{ $listing->type->name }}</span>
        </div>
      </div>
    </div>

  </div>

  <div class="my-10">
    <h3 class="text-2xl">توضیحات</h3>
    <p class="text-lg mt-2 text-justify text-gray-800 leading-10">{{ $listing->description }}</p>
  </div>
</main>
@endsection


@section('bottom_scripts')
<script src="{{ asset('js/lightbox.min.js') }}"></script>
@endsection