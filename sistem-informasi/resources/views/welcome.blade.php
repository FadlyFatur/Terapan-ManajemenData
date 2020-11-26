@extends('layout.main')
@section('title','Beranda')
@section('halaman','Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
<!-- //welcome -->

<!-- image slider -->
<div class="container-fluid jumbo">
  <div class="jumbotron" style="background-image: url(&quot;img/Register-photo.jpg&quot;) ">
  <div class="container teks">
    <!-- <hr class="my-4"> -->
      <h1 class="display-4  align-text-bottom">Sistem Informasi Kependudukan RW 02</h1>
      <p class="lead align-text-bottom"></p>
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
            <div class="article-image" data-background="{{$r['url']}}" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
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
  @endif
</div>
  <hr>

<!-- staff -->  
<div class="container-fluid">
  <div class="d-flex justify-content-between">
      <a href="{{ route('lihatStaff') }}"><h2 class="section-title">Staf/Pengurus RW <i class="fas fa-chevron-right"></i></h2></a>
  </div>
  @if ($staff->count() == 0)
  <div class="row d-flex justify-content-center">
    <div class="col">
      <div class="alert alert-danger text-center">
        <div class="alert-title">Belum ada data staff.</div>
      </div>
    </div>
  </div>
  @else

  <div class="row pb-2">
    @foreach ($staff as $s)
      <div class="col-md-3 col-sm-6 p-5">
        <div class="user-item text-center">
          @if (isset($s->foto))
          <div class="company-header-avatar" style="background-image: url({{Storage::url($s['url'])}})">
          @else
          <div class="company-header-avatar" style="background-image: url(&quot;assets/img/avatar/avatar-5.png&quot;)">
          @endif
          </div>
          <!-- <img alt="image" src="{{Storage::url($s['url'])}}" class="img-fluid"> -->
          <div class="user-details mt-3">
            <h5 class="user-name">{{$s['nama']}}</h5>
            <div class="text-job text-muted">{{ $s->jabatan->njabatan }}</div>
          </div>  
        </div>
      </div>
    @endforeach
  </div>
  @endif
</div>
<hr>

<!-- informasi kontak -->
<div class="container-fluid">
  <h2 class="section-title">Kontak</h2>
  @if ($beranda->count() == 0)
    <div class="row d-flex justify-content-center">
      <div class="col">
        <div class="alert alert-danger text-center">
          <div class="alert-title">Belum ada data kontak.</div>
        </div>
      </div>
    </div>
    @else
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
  @endif
</div>
  
@endsection