<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>

<body>
    <main>
        @yield('content')
          </main>
          <script src="{{ asset ('js/codigofuente.js')}}"></script>
          <script src="{{ asset ('js/jquery.js')}}"></script>
          @yield('js')
         
</body>
</html>