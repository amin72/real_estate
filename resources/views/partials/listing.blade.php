<div class="w-full sm:w-1/2 lg:w-1/3 mb-20 sm:px-2 md:px-6">
  <div class="flex flex-col relative bg-white border-2">
    <img class="w-full h-64 object-cover" src="{{ $listing->getThumbnail('image') }}" alt="">
    <div class="absolute pt-4 pr-2 inset-0 z-10">
      <span class="change_price tracking-widest bg-green-400 p-2 rounded text-white text-sm cursor-default">{{ $listing->price }} تومان</span>
    </div>
    <div class="flex-auto p-4 text-green-400 z-20">
      <div class="text-center">
        <h4 class="text-xl font-semibold text-primary">{{ $listing->title }}</h4>
        <p class="text-gray-700 mt-1 mb-4 text-lg">{{ Str::substr($listing->address, 0, 20) }}</p>
      </div>
      <hr>
      <div class="flex flex-wrap py-2 mt-4">
        <div class="w-7/12 flex flex-row items-center">
          <svg class="h-5 w-5 fill-current" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/>
          </svg>
          <span class="mr-1">متراژ: {{ $listing->area }} مترمربع</soan>
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
        <span class="mr-1">تاریخ: {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($listing->created_at->format('Y-m-d'))) }}</span>
      </div>
      <hr>
      <a href="{{ route('listings.show', $listing->id) }}" class="block mt-4 text-center text-white bg-primary py-2 rounded">مشاهده جزییات ملک</a>
    </div>
  </div>
</div>
