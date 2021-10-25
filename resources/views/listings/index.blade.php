@extends('layouts.app')


@section('content')
<main class="sm:px-4 xl:px-32 mt-10">
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
              </svg>
              <span class="mr-1">متراژ: ۳۶۰ مترمربع</soan>
            </div>
            <div class="w-5/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg>
              <span class="mr-1">پارکینگ: ندارد</span>
            </div>
          </div>
          <div class="flex flex-wrap py-2 mb-4">
            <div class="w-7/12 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22h-768q-65 0-128-22v110q0 17-9.5 28.5t-22.5 11.5h-64q-13 0-22.5-11.5t-9.5-28.5v-186q-128-117-128-286v-192h1536zm-960-416q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm1088 512v64q0 14-9 23t-23 9h-1728q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96v-640q0-106 75-181t181-75q108 0 184 78 46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22l-314 314q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104t23.5-108q-37-35-88-35-53 0-90.5 37.5t-37.5 90.5v640h1504q14 0 23 9t9 23zm-896-448q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm192 64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm-64-64q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23zm128 0q0 14-9 23t-23 9-23-9-9-23 9-23 23-9 23 9 9 23z"/>
              </svg>
              <span class="mr-1">انبار: ۲</span>
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

@endsection