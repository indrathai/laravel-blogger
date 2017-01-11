<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/semantic/semantic.css">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
     <!-- Scripts -->
    <script src="{{ url('js/app.js') }}" ></script>
    <script src="{{ url('semantic/semantic.js') }}" ></script>
    <title>{{ config('app.name', 'Blogger') }} - @yield('title')</title>

</head>
<body>
  @include('partials._nav_sidebar')

  <div class="pusher">
    <div class="main-content">
      @include('partials._nav_top')
      @include('partials._breadcrumbs')

      @yield('content')
    </div>
    @include('partials._footer')
    @include('partials._contact_form_modal')
    @include('partials._scroll_top')
  </div><!--end of pusher-->

  @yield('scripts')

</body>
</html>
