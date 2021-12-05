<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="{{ $meta_description }}">
  <link href="{{ asset(Voyager::image(setting('site.favicon'))) }}" rel="icon">
  <title>@if (request()->is('/')) {{ setting('site.title') }}
    @else {{ $title }} - {{ setting('site.title') }} @endif</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/business.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <div class="wrapper">
   @include('components.__preloader')
    <!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    @include('layouts.header')
    <!-- /.Header -->

    @yield('content')

    <!-- ========================
      Footer
    ========================== -->
    @include('layouts.footer')
    <!-- /.Footer -->
    @include('components.__scrollTop')

  </div><!-- /.wrapper -->


  {{-- Discus --}}
  <script id="dsq-count-scr" src="//laravel-blog-0vd7pfnmqn.disqus.com/count.js" async></script>

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
