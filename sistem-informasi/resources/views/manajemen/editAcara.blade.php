@extends('layout.main')
@section('title','Sunting Acara')
@section('halaman','Acara/Kegiatan')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/editAcara.css') }}">
@endsection

@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
     <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
@endif

@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span>×</span>
    </button>
    Data Berhasil Disimpan.
  </div>
</div>
@endif

<div class="card acara-size">
  <div class="card-header">
    <h4>Manajemen Acara/Kegiatan</h4>
    </div>

    <div class="container">
    <a class="btn btn-primary m-3 " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fas fa-plus"></i> Tambah Acara/Kegiatan
    </a>
    
      <div class="collapse p-3" id="collapseExample">
        <form class="m-2" method="post" action="{{route('post')}}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
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
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Pilih Image</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" class="form-control" name="image">
              </div>
              <h6 class="p-2 mx-auto">*Max ukuran image/foto : 2MB</h6>
            </div>
            
            
            <div class="form-group row mb-4">
              <div class="mx-auto button-submit">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form> 

      </div>
    </div>
</div>

  <div class="card acara-size">
    <div class="card-header">
      <h4>Data Acara/Kegiatan</h4>
    </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Publikasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $a)
              <tr>
                <td>{{$no++}}</td>
                <td>{{ $a['judul'] }}</td>
                <td>{{ $a['created_at'] }}</td>
                @if ($a['status'] != 0)
                <td><div class="badge badge-success">Aktif</div></td>
                @else
                <td><div class="badge badge-success">Non-Aktif</div></td>
                @endif
                <!-- <td></td> -->
                <td>
                    <a href="{{route('showAcara',['slug' => $a->slug])}}" target="_blank" class="btn btn-sm btn-outline-danger fas fa-eye">
                    <a href="" class="btn btn-sm btn-outline-danger fa fa-edit">
                    <a href="{{route('deleteAcara',['id' => $a->id])}}" class="btn btn-sm btn-outline-danger fa fa-trash">
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
@endsection

@section('js')
  <script src="js/editAcara.js"></script>
@endsection