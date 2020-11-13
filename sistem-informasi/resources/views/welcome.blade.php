@extends('layout.main')
@section('title','Beranda')
@section('halaman','Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
<!-- //welcome -->
@if (session('status'))
<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        {{ __('Selamat Datang!') }}
    </div>
</div>
@endif

<!-- image slider -->
<div class="container-fluid jumbo">
  <div class="jumbotron" style="background-image: url(&quot;img/Register-photo.jpg&quot;) ">
  <div class="container teks">
    <!-- <hr class="my-4"> -->
      <h1 class="display-4  align-text-bottom">Sistem Informasi Warga</h1>
      <p class="lead align-text-bottom">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
  </div>
</div>

<!-- news section -->
<div class="container-fluid">
  <div class="d-flex justify-content-between">
      <a href="{{ route('Acara') }}"><h2 class="section-title">Acara/Kegiatan Masyarakat <i class="fas fa-chevron-right"></i></h2></a>
  </div>
  @if ($data->count() == 0)
  <div class="row d-flex justify-content-center">
    <div class="col">
      <div class="alert alert-danger text-center">
        <div class="alert-title">Belum ada acara/kegiatan.</div>
      </div>
    </div>
  </div>
  @else
  <div class="row">
  @foreach($data as $r)
    <div class="col-12 col-md-4 col-lg-4">
      <article class="article article-style-c">
        <div class="article-header">
          <div class="article-image" data-background="{{ URL::asset( 'acara/'.$r['foto'] ) }}" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
          </div>
        </div>
        <div class="article-details">
          <div class="article-category"><a href="#">Acara/Kegiatan</a> <div class="bullet"></div> <a href="#">{{ date('m/d/Y',strtotime($r['created_at'])) }}</a></div>
          <div class="article-title">
            <h5 class="mb-4">{{$r['judul']}}</h5>
          </div>
          <div class="article-cta">
            <a href="{{route('showAcara',['slug' => $r->slug])}}">Baca Selengkapnya <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </article>
    </div>
  @endforeach
  </div>  
</div>
  @endif
  <hr>

<!-- staff -->  
<div class="container-fluid">
  <h2 class="section-title">Staff / Pengurus <i class="fas fa-chevron-right"></i></h2>
  
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
          <p>{{$beranda['kontak']}}</p>
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
          <p>{{$beranda['email']}}</p>
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
            <p class="m-2">{{$beranda['alamat']}}</p>
          </div>
        </div>   
    </div>
  </div>
</div>
  
@endsection