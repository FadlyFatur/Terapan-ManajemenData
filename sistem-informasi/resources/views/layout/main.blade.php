<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{config('app.name')}} - @yield('title')</title>

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('fontawesome-free-5.15.1-web\css\all.css')}}" rel="stylesheet">

  <!-- CSS Libraries -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<link rel="stylesheet" href="{{asset('dist/css/chocolat.css')}}" type="text/css" media="screen" >
  @yield('css')

  <script type="text/javascript" src="{{ asset('dist/js/chocolat.js') }}"></script>
  

  <style>
  /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layout.nav')
      @include('layout.sidebar')
      @yield('modal')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('halaman')</h1>
          </div>
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020  |  Created By <a href="https://www.itenas.ac.id/">Informatika Itenas</a>   |  Template By <a href="https://getstisla.com/getting-started">STISLA</a> 
        </div>
        <div class="footer-right">
          RW 02, Kelurahan Sukapada, Kecamatan Cibeunying Kidul, Kota Bandung.
        </div>
      </footer>
    </div>
  </div>
 
  <script src="{{asset('jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('moment.min.js')}}"></script>
  <script src="{{asset('bootstrap-datetimepicker.min.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <!-- Page Specific JS File -->
  @yield('js')
</body>
</html>
