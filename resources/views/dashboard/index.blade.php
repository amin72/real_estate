@extends('layouts.app')


@section('title')
  پنل کاربری
@endsection


@section('content')
<main class="sm:px-4 xl:px-32 mt-6">
  <div class="border border-gray-200 rounded">
    <h2 class="text-center text-2xl text-white bg-primary py-4 overflow-hidden">املاک ثبت شده توسط شما</h2>

    <div class="my-10 px-10">
      @if ($listings)
        <ul class="list-decimal font-semibold">
          @foreach($listings as $listing)
            <li class="py-4">
              @if ($listing->published)
                <h3>  
                  <a href="{{ route('listings.show', $listing->id) }}" class="text-lg">{{ $listing->title }}</a>
                </h3>
                <p class="mt-2 font-normal">این ملک در سایت ثبت شده است. جهت ویرایش یا حذف آن با مدیر سایت در تماس باشید.</p>
              @else
                <h3 class="text-lg">{{ $listing->title }}</h3>
                <div class="flex flex-col md:flex-row mt-3">
                  {{-- delete post --}}
                  <form action="{{ route('listings.destroy', $listing) }}" method="POST" onsubmit="return confirm('از حذف این آگهی مطمئن هستید؟')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="block px-4 py-2 text-white bg-red-400 rounded md:ml-4 mb-4 md:mb-0 text-center">حذف</button>
                  </form>

                  <a href="{{ route('listings.edit', $listing->id) }}" class="block px-4 py-2 text-white bg-secondary rounded text-center">ویرایش</a>
                </div>
              @endif
            </li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>

  <div class="border border-gray-200 rounded my-10">
    <h2 class="text-center text-2xl text-white bg-primary py-4 mb-4">ویرایش اطلاعات کاربری</h2>
    
    <div class="my-10 px-10">
      <form action="{{ route('dashboard.update', 1) }}" method="POST" class="w-full md:w-1/2">
        @csrf
        @method('PUT')
        
        <!-- Name -->
        <div>
          <label for="name">نام</label>
          <input
            type="text"
            name="name"
            value="{{ Auth::user()->name }}"
            class="block mt-1 w-full rounded"
            required />
        </div>

        <div class="mt-4">
          <button class="block px-4 py-2 text-white rounded bg-secondary font-semibold tracking-wide">
            ارسال
          </button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection