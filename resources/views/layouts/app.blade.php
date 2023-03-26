<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <title>{{ $title }} | PBW-2023</title>
</head>
<body @yield('body')>

  @include('sweetalert::alert')

  @yield('content')

  @vite('resources/js/app.js')
  
</body>
</html>