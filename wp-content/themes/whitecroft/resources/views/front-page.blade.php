@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container">
    <div class="m-auto bg-semi-transparent p-12 max-w-md">
      @php the_content() @endphp
    </div>
    </div>
  @endwhile
@endsection
