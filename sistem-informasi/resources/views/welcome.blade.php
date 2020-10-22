@extends('layout.main')
@section('title','Beranda')
@section('halaman','Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
<!-- image slider -->
<div class="container-fluid">

<div id="carouselExampleIndicators3" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class=""></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="1" class=""></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img class="d-block w-100" src="https://images.pexels.com/photos/1379655/pexels-photo-1379655.jpeg?cs=srgb&dl=pexels-jonas-von-werne-1379655.jpg&fm=jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sistem Manajemen Data Warga - RW 02 </h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/2342406/pexels-photo-2342406.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Heading</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/2802809/pexels-photo-2802809.jpeg?cs=srgb&dl=pexels-keegan-checks-2802809.jpg&fm=jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Heading</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <hr>
</div>

<!-- news section -->
<h2 class="section-title">Acara/Kegiatan Masyarakat</h2>
<div class="row">
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="assets/img/news/img13.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                </div>
              </div>
              <div class="article-details">
                <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                <div class="article-title">
                  <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                </div>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. </p>
              </div>
            </article>
          </div>

          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="assets/img/news/img13.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                </div>
              </div>
              <div class="article-details">
                <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                <div class="article-title">
                  <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                </div>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. </p>
              </div>
            </article>
          </div>

          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="assets/img/news/img13.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                </div>
              </div>
              <div class="article-details">
                <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                <div class="article-title">
                  <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                </div>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. </p>
              </div>
            </article>
          </div>
          
        </div>  
        <hr>

<!-- staff -->  
<div class="container-fluid">
  <h2 class="section-title">Staff / Pengurus</h2>
  
  <div class="row">
    <div class="col-md-3 mb-5">
      <div class="user-item">
        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
        <div class="user-details">
          <div class="user-name">Wildan Ahdian</div>
          <div class="text-job text-muted">Project Manager</div>
        </div>  
      </div>
    </div>
    <div class="col-md-3 mb-5">
      <div class="user-item">
        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
        <div class="user-details">
          <div class="user-name">Wildan Ahdian</div>
          <div class="text-job text-muted">Project Manager</div>
        </div>  
      </div>
    </div>
    <div class="col-md-3 mb-5">
      <div class="user-item">
        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
        <div class="user-details">
          <div class="user-name">Wildan Ahdian</div>
          <div class="text-job text-muted">Project Manager</div>
        </div>  
      </div>
    </div>
    <div class="col-md-3 mb-5">
      <div class="user-item">
        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
        <div class="user-details">
          <div class="user-name">Wildan Ahdian</div>
          <div class="text-job text-muted">Project Manager</div>
        </div>  
      </div>
    </div>
  </div>

</div>
<hr>

<!-- informasi kontak -->
<h2 class="section-title">Kontak</h2>
<div class="container-fluid d-flex justify-content-center">
  <div class="row kontak mt-5">
    <div class="col-md-4 mb-2">
      <div class="box mr-5">
        <div class="body-box">
          <i class="fas fa-phone"></i>
        </div>
        <div class="footer-box">
          <h5>Kontak</h5>
          <p>08773168092</p>
        </div>
      </div>   
    </div>

    <div class="col-md-4 mb-2">
      <div class="box mr-5">
        <div class="body-box">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="footer-box">
          <h5>Email</h5>
          <p>test@gmail.com</p>
        </div>
      </div>   
    </div>

      <div class="col-md-4 mb-2">
        <div class="box mr-5">
          <div class="body-box">
          <a href="https://www.google.com/maps/search/?api=1&query=-6.8997356,107.6452842" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
          </div>
          <div class="footer-box">
            <h5>Alamat</h5>
            <p>Kec. Cibeunying Kidul, Kota. Bandung, Jawab Barat</p>
          </div>
        </div>   
    </div>
  </div>
</div>
  
@endsection