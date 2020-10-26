@extends('layout.main')
@section('title','Berita')
@section('halaman','Acara/Kegiatan RW 2')

@section('content')

<div class="container-fluid">

<div class="card">
<img class="card-img-top img-fluid" src="{{$data['foto_kegiatan']}}" alt="{{$data['judul']}}">
  <div class="card-header text-secondary">
    <p href="#">Acara/Kegiatan</p>
    <div class="bullet"></div> 
    <p href="#">{{$data['created_at']}}</p>
  </div>
  <div class="card-body">
    <h3 class="card-title text-primary">{{$data['judul']}}</h3>
    <p style="color:black;">{{$data['deskripsi']}}</p>
  </div>
</div>

<!-- <article class="article article-style-c">
<div class="article-header">
  <div class="article-image">
    <img src="{{$data['foto_kegiatan']}}" width="auto" height="500" alt="">
  </div>
</div>
  <div class="article-details">
    <div class="article-category"><a href="#">Acara/Kegiatan</a> <div class="bullet"></div> <a href="#">{{$data['created_at']}}</a></div>
    <div class="article-title">
      <h2><a href="#">{{$data['judul']}}</a></h2>
    </div>
    <p style="color:black;">{{$data['deskripsi']}}</p>
    <div class="article-user">
      <img alt="image" src="assets/img/avatar/avatar-1.png">
    </div>
  </div>
</article> -->

</div>
@endsection