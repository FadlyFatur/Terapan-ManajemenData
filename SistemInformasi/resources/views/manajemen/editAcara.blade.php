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
    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Kegiatan</label>
      <div class="col-sm-12 col-md-7">
        <input type="text" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" required>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi/Berita</label>
      <div class="col-sm-12 col-md-7">
      <textarea class="form-control" id="deskripsi form" rows="3" placeholder="Masukan Deskripsi kegiatan atau acara" rows="10" cols="200" style="height: 300px;" required></textarea>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Time Picker</label>
      <div class="input-group mb-3 col-sm-12 col-md-7" id="dtp">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-calendar"></i>
          </div>
        </div>
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
      <div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Publish</button>
      </div>
    </div>

  </div>
</div>

<div class="card acara-size">
  <div class="card-header">
    <h4>Data Berita</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-md">
        <tbody><tr>
          <th>#</th>
          <th>Name</th>
          <th>Created At</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Irwansyah Saputra</td>
          <td>2017-01-09</td>
          <td><div class="badge badge-success">Active</div></td>
          <td><a href="#" class="btn btn-secondary">Detail</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Hasan Basri</td>
          <td>2017-01-09</td>
          <td><div class="badge badge-success">Active</div></td>
          <td><a href="#" class="btn btn-secondary">Detail</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Kusnadi</td>
          <td>2017-01-11</td>
          <td><div class="badge badge-danger">Not Active</div></td>
          <td><a href="#" class="btn btn-secondary">Detail</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Rizal Fakhri</td>
          <td>2017-01-11</td>
          <td><div class="badge badge-success">Active</div></td>
          <td><a href="#" class="btn btn-secondary">Detail</a></td>
        </tr>
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