@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container">
    <div class="bg-white p-12 border-t-4 text-black">
      @include('partials.content-page')
    </div>
    </div>
  @endwhile
@endsection
