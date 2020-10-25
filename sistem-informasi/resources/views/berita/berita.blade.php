@extends('layout.main')
@section('title','Berita')
@section('halaman','Acara/Kegiatan RW 2')

@section('content')

<div class="container">

<article class="article article-style-c">
<div class="article-header">
  <div class="article-image" data-background="assets/img/news/img08.jpg" style="background-image: url(&quot;assets/img/news/img08.jpg&quot;);">
  </div>
  <!-- <div class="article-title">
    <h2><a href="#">{{$data['judul']}}</a></h2>
  </div> -->
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
</article>

</div>
@endsection