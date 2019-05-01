<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('flex flex-col min-h-screen font-sans text-blue-dark') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap  flex-1 flex items-center justify-center" role="document">
      <div class="content w-full py-16">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
