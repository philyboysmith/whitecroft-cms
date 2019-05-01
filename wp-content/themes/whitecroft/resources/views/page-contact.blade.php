@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-less-transparent py-8">

  <div class="container">
    <div class="content-wrapper">
      <h1 class="text-base text-blue-dark uppercase tracking-wide">{!! App::title() !!}</h1>
        <div class="md:flex">
          <div class="map"></div>
          <div>@php the_content() @endphp</div>
        </div>  
    </div>
    </div>
  </div>
  @endwhile
@endsection
