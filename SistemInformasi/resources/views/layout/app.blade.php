<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
    @section('css')
  </head>

  <body>
  @include('layout.nav')

  <div class="container-fluid container-utama">
      <!-- sidebar -->
      @include('layout.sidebar')
      <!-- konten -->
      @yield('isi')
  </div>

 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="{{asset('jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="{{asset('bootstrap.bundle.min.js')}}" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('js/app  .css') }}"></script>

  @yield('js')
  </body>
</html>
