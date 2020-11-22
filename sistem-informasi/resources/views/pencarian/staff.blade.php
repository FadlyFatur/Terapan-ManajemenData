@extends('layout.main')
@section('title','Berita')
@section('halaman','Staff/Pengurus RW 2')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/staff.css') }}">
@endsection

@section('content')
<div class="card author-box card-primary">
  <div class="card-body">
      @if ($data->count() == 0)
        <div class="alert alert-warning alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Perhatian</div>
            Belum ada data staff/pengurus dimasukan.
          </div>
        </div>
      @else
        
      <div class="row">
        @foreach ($data as $d)
        <div class="col-md-6 p-5">
          <div class="author-box-left">
            <div class="avatar-item mr-5">
              <img alt="image" src="{{ Storage::url($d['url']) }}" class="" data-toggle="tooltip" title="" data-original-title="{{$d->nama}}">
              <div class="avatar-badge" title="" data-toggle="tooltip" data-original-title="Editor">{{$d->jabatan}}</i></div>
            </div>
          </div>
          <div class="author-box-details">
            <div class="author-box-name">
              <a href="#">{{$d->nama}}</a>
            </div>
            <div class="author-box-job">No : {{$d->no_pegawai}}</div>
            <div class="author-box-description" style="color:black">
              <p>{{$d->alamat}}</p>
              <span class="badge badge-info">{{$d->no_hp}}</span>
            </div>
          </div>
        </div>
        <hr>
        @endforeach
      </div>
      @endif
    <hr>
  </div>
</div>
@endsection