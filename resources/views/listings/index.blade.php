@extends('layouts.app')


@section('content')
<main class="sm:px-4 xl:px-32 mt-10">
  <section class="mt-20 flex flex-wrap">
    @foreach($listings as $listing)
      @include('partials.listing', ['listing' => $listing])
    @endforeach
  </section>

  {{ $listings->links() }}
</main>

@endsection