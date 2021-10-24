@extends('layouts.app')


@section('content')
  <main class="sm:px-4 xl:px-32 mt-10">
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
@endsection


@section('bottom_scripts')
@endsection
</body>
</html>
