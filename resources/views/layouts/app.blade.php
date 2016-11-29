<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
    <link rel="stylesheet" id="font-awesome-css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
      <link href="/css/stars.css" rel="stylesheet">
  </head>
  <body>
      @include('partials._header')
      
          @yield('content')
      
      
      @yield('footer')
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>