@extends('layout.main')
@section('title','Sunting Acara')
@section('halaman','Acara/Kegiatan')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/editAcara.css') }}">
@endsection

@section('content')
<div class="card acara-size">
  <div class="card-header">
    <h4>Tambah Acara/Kegiatan</h4>
  </div>
  <div class="card-body">
  <form>
    <!-- <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
      <div class="col-sm-12 col-md-7">
        <input type="text" name="slug" id="slug" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" required>
      </div>
    </div> -->

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Kegiatan</label>
      <div class="col-sm-12 col-md-7">
        <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" required>
        <p></p>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi/Berita</label>
      <div class="col-sm-12 col-md-7">
      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukan Deskripsi kegiatan atau acara" rows="10" cols="200" style="height: 300px;" required></textarea>
      </div>
    </div>

     <div class="form-group row">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="exampleFormControlFile1">File input</label>
      <div class="col-sm-12 col-md-7">
        <input type="file" class="form-control">
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
      <div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Publish</button>
      </div>
    </div>
    </form> 
  </div>
</div>

<div class="card acara-size">
  <div class="card-header">
    <h4>Data Acara/Kegiatan</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-md">
        <tbody><tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>status</th>
          <th>Aksi</th>
        </tr>
      @foreach($data as $a)
        <tr>
          <td>{{$no++}}</td>
          <td>{{ $a['judul'] }}</td>
          <td>{{ $a['tgl'] }}</td>
          @if ($a['status'] != 0)
          <td><div class="badge badge-success">Aktif</div></td>
          @else
          <td><div class="badge badge-success">Non Aktif</div></td>
          @endif
          <!-- <td></td> -->
          <td>
              <a href="{{route('showAcara',['slug' => $a->slug])}}" class="btn btn-sm btn-outline-danger fas fa-eye">
              <a href="#" class="btn btn-sm btn-outline-danger fa fa-edit">
              <a href="#" class="btn btn-sm btn-outline-danger fa fa-trash">
          </td>
        </tr>
      @endforeach
        
      </tbody></table>
    </div>
  </div>
  <div class="card-footer text-right">
    <nav class="d-inline-block">
      <ul class="pagination mb-0">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
        </li>
      </ul>
    </nav>
  </div>
<div></div></div>
@endsection

@section('js')
  <script src="js/editAcara.js"></script>
@endsection