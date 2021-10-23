<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>املاک</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body dir="rtl" class="bg-white font-yekan text-gray-900">
  <section class="flex flex-col lg:flex-row justify-content-center text-center lg:justify-between sm:px-10 md:px-20 xl:px-40 py-4">
    <!-- social medias -->
    <div class="mt-1 flex items-center text-primary mx-auto">
      <!-- instagram -->
      <a href="#" class="">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
          <title>اینستاگرام</title>
          <path transform="translate(-1 -1)" d="M18.94586,6.28931a6.60561,6.60561,0,0,0-.41833-2.18463,4.41189,4.41189,0,0,0-1.03809-1.59412,4.41189,4.41189,0,0,0-1.59412-1.03809,6.60561,6.60561,0,0,0-2.18463-.41833C12.75073,1.01038,12.44427,1,10,1s-2.75073.01038-3.71069,0.05414a6.60561,6.60561,0,0,0-2.18463.41833A4.41189,4.41189,0,0,0,2.51056,2.51056,4.41189,4.41189,0,0,0,1.47247,4.10468a6.60561,6.60561,0,0,0-.41833,2.18463C1.01038,7.24927,1,7.55573,1,10s0.01038,2.75073.05414,3.71069a6.60561,6.60561,0,0,0,.41833,2.18463,4.41189,4.41189,0,0,0,1.03809,1.59412,4.41109,4.41109,0,0,0,1.59412,1.03809,6.60561,6.60561,0,0,0,2.18463.41833C7.24927,18.98969,7.55573,19,10,19s2.75073-.01031,3.71069-0.05414a6.60561,6.60561,0,0,0,2.18463-.41833,4.60208,4.60208,0,0,0,2.6322-2.6322,6.60561,6.60561,0,0,0,.41833-2.18463C18.98962,12.75073,19,12.44427,19,10S18.98962,7.24927,18.94586,6.28931Zm-1.61993,7.34747a4.97824,4.97824,0,0,1-.30994,1.67114A2.98017,2.98017,0,0,1,15.30792,17.016a4.9786,4.9786,0,0,1-1.67114.30994C12.68787,17.3692,12.40326,17.37836,10,17.37836s-2.68787-.00916-3.63678-0.05243A4.9786,4.9786,0,0,1,4.69208,17.016a2.78769,2.78769,0,0,1-1.03485-.67322A2.78769,2.78769,0,0,1,2.984,15.30792a4.97824,4.97824,0,0,1-.30994-1.67114C2.6308,12.68774,2.62164,12.40314,2.62164,10s0.00916-2.68774.05243-3.63678A4.9786,4.9786,0,0,1,2.984,4.69208a2.78769,2.78769,0,0,1,.67322-1.03485A2.78769,2.78769,0,0,1,4.69208,2.984a4.9786,4.9786,0,0,1,1.67114-.30994C7.31226,2.6308,7.59686,2.62164,10,2.62164s2.68774,0.00916,3.63678.05243a4.9786,4.9786,0,0,1,1.67114.30994,2.78769,2.78769,0,0,1,1.03485.67322A2.78769,2.78769,0,0,1,17.016,4.69208a4.9786,4.9786,0,0,1,.30994,1.67114c0.04327,0.949.05243,1.2337,0.05243,3.63678S17.3692,12.68774,17.32593,13.63678ZM10,5.37836A4.62164,4.62164,0,1,0,14.62164,10,4.62169,4.62169,0,0,0,10,5.37836ZM10,13a3,3,0,1,1,3-3A3,3,0,0,1,10,13Zm5.88422-7.8042a1.08,1.08,0,1,1-1.08-1.08A1.08,1.08,0,0,1,15.88422,5.1958Z"/>
        </svg>
      </a>

      <!-- aparat -->
      <a href="#" class="pr-3">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.33 68.33">
          <title>آپارات</title>
          <path d="M29.49,2,23.2.36A10.58,10.58,0,0,0,10.25,7.87L8.68,13.8A32.4,32.4,0,0,1,29.49,2Z"/>
          <path d="M1.9,39.33.36,45.14A10.58,10.58,0,0,0,7.87,58.08l6,1.6A32.41,32.41,0,0,1,1.9,39.33Z"/>
          <path d="M60.46,10.25,53.73,8.46a32.4,32.4,0,0,1,12.4,21.7l1.85-7A10.58,10.58,0,0,0,60.46,10.25Z"/>
          <path d="M38.69,66.26,45.14,68a10.58,10.58,0,0,0,12.94-7.51l1.82-6.84A32.42,32.42,0,0,1,38.69,66.26Z"/>
          <path d="M34.17,4.54A29.63,29.63,0,1,0,63.79,34.17,29.63,29.63,0,0,0,34.17,4.54ZM17.39,19.32a8.46,8.46,0,1,1,6.71,9.91A8.46,8.46,0,0,1,17.39,19.32ZM29.7,44.92A8.46,8.46,0,1,1,23,35,8.46,8.46,0,0,1,29.7,44.92Zm3.59-6.85a3.76,3.76,0,1,1,4.41-3A3.76,3.76,0,0,1,33.29,38.07ZM50.94,49a8.46,8.46,0,1,1-6.71-9.91A8.46,8.46,0,0,1,50.94,49Zm-5.6-15.68a8.46,8.46,0,1,1,9.91-6.71A8.46,8.46,0,0,1,45.34,33.33Z"/>
        </svg>
      </a>

      <!-- youtube -->
      <a href="#" class="pr-3">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
          <title>یوتیوب</title>
          <path d="M10,2.3C0.172,2.3,0,3.174,0,10s0.172,7.7,10,7.7s10-0.874,10-7.7S19.828,2.3,10,2.3z M13.205,10.334l-4.49,2.096
            C8.322,12.612,8,12.408,8,11.974V8.026C8,7.593,8.322,7.388,8.715,7.57l4.49,2.096C13.598,9.85,13.598,10.15,13.205,10.334z"/>
        </svg>
      </a>
    </div>

    <!-- email -->
    <div class="mt-2 tracking-wide flex items-center mx-auto">
      <span class="pl-1">realestate2021@gmail.com</span>
      <svg class="w-5 h-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" xml:space="preserve">
        <path d="M1.574,5.286c0.488,0.262,7.248,3.894,7.5,4.029C9.326,9.45,9.652,9.514,9.98,9.514c0.328,0,0.654-0.064,0.906-0.199
          s7.012-3.767,7.5-4.029C18.875,5.023,19.337,4,18.44,4H1.521C0.624,4,1.086,5.023,1.574,5.286z M18.613,7.489
          c-0.555,0.289-7.387,3.849-7.727,4.027s-0.578,0.199-0.906,0.199s-0.566-0.021-0.906-0.199S1.941,7.777,1.386,7.488
          C0.996,7.284,1,7.523,1,7.707S1,15,1,15c0,0.42,0.566,1,1,1h16c0.434,0,1-0.58,1-1c0,0,0-7.108,0-7.292S19.004,7.285,18.613,7.489z"
          />
      </svg>
    </div>

    <!-- phone number -->
    <div class="mt-1 tracking-wide flex items-center mx-auto">
      <span class="pl-1">09389370123</span>
      <svg class="w-5 h-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" xml:space="preserve">
        <path d="M11.229,11.229c-1.583,1.582-3.417,3.096-4.142,2.371c-1.037-1.037-1.677-1.941-3.965-0.102
	        c-2.287,1.838-0.53,3.064,0.475,4.068c1.16,1.16,5.484,0.062,9.758-4.211c4.273-4.274,5.368-8.598,4.207-9.758
	        c-1.005-1.006-2.225-2.762-4.063-0.475c-1.839,2.287-0.936,2.927,0.103,3.965C14.324,7.812,12.811,9.646,11.229,11.229z"/>
      </svg>
    </div>
  </section>

  <nav class="bg-primary text-white flex py-4 md:items-center justify-between px-4 sm:px-10 xl:px-40 sticky top-0 opacity-90 z-50">
    <div class="flex flex-col md:flex-row justify-around md:justify-start relative">

      <div class="flex justify-between items-center md:hidden absolute top-1">
        <button id="menu_button" type="button" class="p-2 text-gray-500 ring-1 ring-gray-400 rounded focus:outline-none">
          <svg id="menu_svg" class="h-6 w-6 fill-current text-center mx-auto" viewBox="0 0 18 14" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H17C17.5523 0 18 0.447715 18 1C18 1.55228 17.5523 2 17 2H1C0.447716 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447716 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447716 14 1 14H17C17.5523 14 18 13.5523 18 13C18 12.4477 17.5523 12 17 12H1Z" />
          </svg>
        </button>
      </div>

      <div id="menu" class="hidden px-2 pt-2 md:flex md:py-0 mt-12 md:mt-0 transition-all duration-500 ease-in-out">
        <a href="#" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 md:mt-0 hover:text-gray-200">خانه</a>
        <a href="#" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">درباره ما</a>
        <a href="#" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">مشاهده املاک</a>
        @if ($user = Auth::user())
          <a href="#" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200">داشبورد</a>
          <form action="" method="POST">
            @csrf
            <button
              type="submit"
              class="tracking-wide block py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:bg-gray-200 focus:outline-none"
            >خروج</button>
          </form>
        @endif
        @if(Auth::guest())
          <a href="#" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">ورود</a>
          <a href="#" class="tracking-wide block py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">ثبت نام</a>
        @endif
      </div>
    </div>
    
    <div class="">
      <a class="" href="#">
        <img class="h-12" src="{{ asset('img/logo.png') }}" alt="">
      </a>
    </div>
  </nav>


  <main class="sm:px-4 xl:px-32 my-10">
    <!-- search -->
    <section class="bg-secondary py-10 px-10 xl:px-32 text-center text-white my-10 sm:mx-2 md:mx-6">
      <h1 class="text-4xl">جستجوی در املاک ثبت شده</h1>
      <p class="text-xl my-6">در این قسمت می توانید ملک مورد نظر خود را براساس فیلترهای مورد نظر خود انتخاب کنید.</p>

      <form class="flex flex-col text-gray-800">
        <div class="flex flex-col md:flex-row my-2">
          <input type="text" class="block w-full md:w-1/2 md:ml-2 rounded py-2 px-2 my-2 focus:outline-none" placeholder="کلمه مورد را وارد کنید">
          <input type="text" class="block w-full md:w-1/2 md:mr-2 rounded py-2 px-2 my-2 focus:outline-none" placeholder="کلمه مورد را وارد کنید">
        </div>
        
        <div class="flex flex-col md:flex-row mb-2">
          <select name="" class="form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:ml-2 focus:outline-none bg-left my-2 focus:outline-none">
            <option value="">---</option>
            <option value="">آپارتمان</option>
            <option value="">ویلا</option>
            <option value="">هتل</option>
            <option value="">مسافر خانه</option>
          </select>

          <select name="" class="form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:mx-2 focus:outline-none bg-left my-2 focus:outline-none">
            <option value="">---</option>
            <option value="">یک</option>
            <option value="">دو</option>
            <option value="">سه</option>
            <option value="">چهار</option>
            <option value="">پنج</option>
          </select>

          <select name="" class="form-select px-2 py-2 rounded-lg w-full md:w-1/3 md:mr-2 focus:outline-none bg-left my-2 focus:outline-none">
            <option value="">---</option>
            <option value="">50,000,000</option>
            <option value="">60,000,000</option>
            <option value="">70,000,000</option>
            <option value="">80,000,000</option>
            <option value="">90,000,000</option>
            <option value="">100,000,000</option>
          </select>
        </div>

        <div>
          <button class="bg-green-500 px-3 py-2 rounded w-full my-2 text-white font-semibold text-lg">ارسال</button>
        </div>
      </form>
    </section>

    <!-- listing -->
    <section class="mt-20 flex flex-wrap">
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <!-- viewBox="0 0 455.247 455.247" xml:space="preserve"> -->
                <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="http://localhost:8888/homes/home-1.jpg" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">90,000,000 تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">ویلای خوشکل ما</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">اهواز - خیابان نادری</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.247 455.247" xml:space="preserve">
              		<path d="M421.391,14.663c-62.305,22.431-125.524,11.157-191.11-0.649C162.42,1.799,93.575-10.494,23.694,14.663
                    c-5.952,2.143-9.919,7.788-9.919,14.113v397.698c0,10.389,10.325,17.625,20.081,14.113c62.3-22.429,125.504-11.159,191.11,0.649
                    c67.648,12.176,136.643,24.53,206.588-0.649c5.951-2.143,9.919-7.788,9.919-14.113V28.776
                    C441.472,18.373,431.131,11.156,421.391,14.663z M211.28,408.327c-55.548-9.721-111.131-17.015-167.506-2.203V228.02
                    c55.122-6.803,110.037,1.849,167.506,12.104V408.327z M211.28,209.654c-54.836-9.694-111.058-18.097-167.506-11.826V39.601
                    c55.008-16.703,110.837-8.56,167.506,1.487V209.654z M411.472,415.65c-55.85,16.958-112.55,8.309-170.191-1.966V245.501
                    c56.611,10.055,113.034,18.642,170.191,12.294V415.65z M411.472,227.608c-55.966,6.909-111.749-2.117-170.191-12.578V46.453
                    c56.96,10.043,113.134,17.666,170.191,2.675V227.608z"/>
                </svg>
                <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">گاراژ: ندارد</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M464,280H80V100A51.258,51.258,0,0,1,95.113,63.515l.4-.4a51.691,51.691,0,0,1,58.6-10.162,79.1,79.1,0,0,0,11.778,96.627l10.951,10.951-20.157,20.158,22.626,22.626,20.157-20.157h0L311.157,71.471h0l20.157-20.157L308.687,28.687,288.529,48.844,277.578,37.893a79.086,79.086,0,0,0-100.929-8.976A83.61,83.61,0,0,0,72.887,40.485l-.4.4A83.054,83.054,0,0,0,48,100V280H16v32H48v30.7a23.95,23.95,0,0,0,1.232,7.589L79,439.589A23.969,23.969,0,0,0,101.766,456h12.9L103,496h33.333L148,456H356.1l12,40H401.5l-12-40h20.73A23.969,23.969,0,0,0,433,439.589l29.766-89.3A23.982,23.982,0,0,0,464,342.7V312h32V280ZM188.52,60.52a47.025,47.025,0,0,1,66.431,0L265.9,71.471,199.471,137.9,188.52,126.951A47.027,47.027,0,0,1,188.52,60.52ZM432,341.4,404.468,424H107.532L80,341.4V312H432Z"/>
                </svg>
                <span class="mr-1">سرویس بهداشتی: ۲</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: ۳</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: ۱۳۹۹/۰۲/۱۵</span>
            </div>
            <hr>
            <a href="#" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- bottom desciption -->
  <section class="bg-green-400 pb-16 px-10 xl:px-32 text-center text-white">
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

  <footer class="bg-primary text-white">
    <div class="text-center py-6 text-lg">
      کپی رایت ۱۴۰۰ | سازنده تیم <a href="https://boomilia.com" class="hover:text-green-200">بومیلیا</a>

    </div>
  </footer>

  {{-- scripts --}}
  <script src="{{ mix('js/app.js') }}"></script>

  <script>
    $(document).ready(function() {
      $("#menu_button").click(function() {
        $("#menu").toggleClass('hidden');
      })
    })
  </script>
</body>
</html>
