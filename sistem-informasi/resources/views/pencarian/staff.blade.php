@extends('layout.main')
@section('title','Berita')
@section('halaman','Acara/Kegiatan RW 2')

@section('content')
<div class="card author-box card-primary">
  <div class="card-body">
    <div class="row">

      @foreach ($data as $d)
      <div class="col-md-6 p-5">
        <div class="author-box-left">
          <!-- <img alt="image" src="{{ url($d['url']) }}" class="rounded-circle author-box-picture"> -->
          <div class="avatar-item mr-5">
            <img alt="image" src="{{ url($d['url']) }}" class="img-fluid" data-toggle="tooltip" title="" data-original-title="{{$d->nama}}">
            <!-- <div class="avatar-badge" title="" data-toggle="tooltip" data-original-title="Editor"><i class="fas fa-wrench"></i></div> -->
          </div>
        </div>
        <div class="author-box-details">
          <div class="author-box-name">
            <a href="#">{{$d->nama}}</a>
          </div>
          <div class="author-box-job">{{$d->jabatan}} | No : {{$d->no_pegawai}}</div>
          <div class="author-box-description" style="color:black">
            <p>{{$d->alamat}}</p>
            <span class="badge badge-info">{{$d->no_hp}}</span>
          </div>
        </div>
      </div>
      <hr>
      @endforeach

    </div>
    <hr>
  </div>
</div>
@endsection