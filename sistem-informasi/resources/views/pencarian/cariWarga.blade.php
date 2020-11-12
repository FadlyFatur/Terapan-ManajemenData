@extends('layout.main')
@section('title','Cari Data Warga')
@section('halaman','Pencarian Data Warga')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cari.css') }}">
@endsection
@section('content')
<div class = "container p-5">
<div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
   <a class="cari-warga" href=""><span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span> </a>
  </div>
</div>
<hr>
<table class="table table-bordered p-5">
  <thead>
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">TTL</th>
      <th scope="col">Agama</th>
      <th scope="col">Alamat</th>
      <th scope="col">RT/RW</th>
      <th scope="col">Kota</th>
      <th scope="col">Status</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Status Perkawinan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cariwarga as $c)
    <tr>
      <td>{{$c['nik']}}</td>
      <td>{{$c['nama_lengkap']}}</td>
      <td>{{$c['jenis_kelamin']}}</td>
      <td>{{$c['tempat_lahir']}} {{$c['tanggal_lahir']}}</td>
      <td>{{$c['agama_id']}}</td>
      <td>{{$c['alamat']}} {{$c['kelurahan']}} {{$c['kecamatan']}}</td>
      <td>{{$c['rw']}} / {{$c['rt_id']}}</td>
      <td>{{$c['kota']}}</td>
      <td>{{$c['status']}}</td>
      <td>{{$c['kerja_id']}}</td>
      <td>{{$c['satus_perkawinan_id']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection