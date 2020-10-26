@extends('layout.main')
@section('title','Berita')
@section('halaman','Acara/Kegiatan RW 2')

@section('content')
<div class="row">
  @foreach($data as $d)
  <div class="col-12 col-md-4 col-lg-4">
    <article class="article article-style-c">
      <div class="article-header">
        <div class="article-image" data-background="{{$d['foto_kegiatan']}}" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
        </div>
      </div>
      <div class="article-details">
        <div class="article-category"><a href="#">Acara/Kegiatan</a> <div class="bullet"></div> <a href="#">{{$d['created_at']}}</a></div>
        <div class="article-title">
          <h2><a href="{{route('showAcara',['slug' => $d->slug])}}">{{$d['judul']}}</a></h2>
        </div>
      </div>
    </article>
  </div>
  @endforeach
</div>

@endsection