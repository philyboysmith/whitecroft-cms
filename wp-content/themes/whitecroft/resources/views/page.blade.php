@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-less-transparent py-8">
  <div class="container">
    <div class="content-wrapper">
      @include('partials.content-page')
    </div>
    </div>
  </div>
  @endwhile
@endsection
