<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
@include('layouts.header')
@if(Request::is('/'))
@include('layouts.hello')
@endif
<div class="conteiner mt-5 ml-5">
  @include('layouts.messages')
  <div class="row ml-5">
    <div class="col-8  ">
      @yield('content')
    </div>
    <div class="col-4">
      @include('part.part1')
    </div>
  </div>
</div>
@include('layouts.footer')
</body>
</html>
