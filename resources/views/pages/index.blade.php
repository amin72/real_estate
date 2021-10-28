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
      @foreach($listings as $listing)
      <div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
        <div class="flex flex-col relative bg-white border-2">
          <img class="w-full" src="{{ asset($listing->image) }}" alt="">
          <div class="absolute pt-4 pr-2 inset-0 z-10">
            <span class="tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">{{ $listing->price }} تومان</span>
          </div>
          <div class="flex-auto p-4 text-green-400 z-20">
            <div class="text-center">
              <h4 class="text-xl font-semibold text-primary">{{ $listing->title }}</h4>
              <p class="text-gray-700 mt-1 mb-4 text-lg">{{ Str::substr($listing->address, 0, 20) }}</p>
            </div>
            <hr>
            <div class="flex flex-wrap py-2 mt-4">
              <div class="w-7/12 flex flex-row items-center">
                <!-- viewBox="0 0 455.247 455.247" xml:space="preserve"> -->
                <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
                </svg>
                <span class="mr-1">متراژ: {{ $listing->sqft }} مترمربع</soan>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                <span class="mr-1">پارکینگ: {{ $listing->has_garage ? 'دارد' : 'ندارد' }}</span>
              </div>
            </div>
            <div class="flex flex-wrap py-2 mb-4">
              <div class="w-7/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 241.35 241.349" xmlns="http://www.w3.org/2000/svg">
              		<path d="M205.38,11.465C205.38,5.143,200.237,0,193.913,0H47.435C41.113,0,35.97,5.143,35.97,11.465v197.322
			              c0,6.324,5.144,11.467,11.465,11.467h146.479c6.324,0,11.467-5.143,11.467-11.467V11.465z M191.043,205.921H50.307V14.337h140.736V205.921z"/>
		              <path d="M196.741,227.011H43.808c-3.962,0-7.168,3.211-7.168,7.169s3.206,7.169,7.168,7.169h152.933
			              c3.958,0,7.169-3.211,7.169-7.169S200.699,227.011,196.741,227.011z"/>
		              <path d="M72.483,169.369c3.962,0,7.168-3.211,7.168-7.169V67.208c0-3.958-3.206-7.169-7.168-7.169s-7.168,3.211-7.168,7.169
			              v94.981C65.314,166.158,68.521,169.369,72.483,169.369z"/>
                </svg>
                <span class="mr-1">انبار: {{ $listing->has_store ? 'دارد' : 'ندارد' }}</span>
              </div>
              <div class="w-5/12 flex flex-row items-center">
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M2 12h18v6h-2v-2H2v2H0V2h2v10zm8-6h8a2 2 0 0 1 2 2v3H10V6zm-4 5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span class="mr-1">اتاق خواب: {{ $listing->bedrooms }}</span>
              </div>
            </div>
            <hr>
            <div class="my-6 flex flex-row items-center">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"/>
              </svg>
              <span class="mr-1">تاریخ: {{ $listing->created_at->format('Y-m-d') }}</span>
              
            </div>
            <hr>
            <a href="{{ route('listings.show', $listing->id) }}" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
          </div>
        </div>
      </div>
      @endforeach
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
