<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>املاک</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body dir="rtl" class="bg-gray-50 font-yekan text-gray-900">
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
      <span class="pl-1">09301234567</span>
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
        <a href="{{ route('pages.index') }}" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 md:mt-0 hover:text-gray-200">خانه</a>
        <a href="{{ route('pages.about') }}" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">درباره ما</a>
        <a href="{{ route('listings.index') }}" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">مشاهده املاک</a>
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
          <a href="{{ route('login') }}" class="tracking-wide block md:pl-4 py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">ورود</a>
          <a href="{{ route('register') }}" class="tracking-wide block py-2 rounded leading-tight font-semibold md:flex-shrink-0 mt-2 md:mt-0 hover:text-gray-200">ثبت نام</a>
        @endif
      </div>
    </div>
    
    <div class="">
      <a class="" href="{{ route('pages.index') }}">
        <img class="h-12" src="{{ asset('img/logo.png') }}" alt="">
      </a>
    </div>
  </nav>

  {{-- main content --}}
  @yield('content')

  <footer class="bg-primary text-white">
    <div class="text-center py-6 text-lg">
      کپی رایت ۱۴۰۰ | سازنده تیم <a href="https://boomilia.com" class="hover:text-green-200">بومیلیا</a>

    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(document).ready(function() {
      $("#menu_button").click(function() {
        $("#menu").toggleClass('hidden');
      })
    })
  </script>


  @yield('bottom_scripts')
</body>
</html>
