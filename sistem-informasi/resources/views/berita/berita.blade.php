@extends('layout.main')
@section('title','Berita')
@section('halaman','Acara/Kegiatan RW 2')

@section('content')

<div class="container-fluid">

<div class="card">
<img class="card-img-top " src="{{$data['foto_kegiatan']}}" alt="{{$data['judul']}}">
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


</div>
@endsection