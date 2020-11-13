@extends('layout.main')
@section('title','Sunting Acara')
@section('halaman','Acara/Kegiatan')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/editAcara.css') }}">
@endsection

@section('content')
@if ($errors->any())
  <div class="alert alert-danger alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span>×</span>
    </button>
    <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
     </ul>
  </div>
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

  <div class="container-fluid p-1" id="myGroup">
    <a class="btn btn-primary m-3 " id="colapse1" data-toggle="collapse" href="#tambah" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fas fa-plus"></i> Tambah Acara/Kegiatan
    </a>
    <a class="btn btn-primary m-3 " id="colapse2" data-toggle="collapse" href="#edit" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="far fa-edit"></i> Edit Acara/Kegiatan
    </a>
    
    <div class="collapse p-3" id="edit" data-parent="#myGroup">
      <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
              <form class="card card-sm">
                  <div class="card-body row no-gutters align-items-center">
                      <div class="col-auto">
                          <i class="fas fa-search h4 text-body"></i> 
                      </div>
                      <!--end of col-->
                      <div class="col dropdown" id="myDropdown">
                          <input class="form-control form-control-lg form-control-borderless" type="search" id="myInput" onkeyup="filterFunction()" placeholder="Ketikan judul acara">
                          <div class="dropdown-content">
                          @foreach($data as $d)
                            <a href="#about">{{$d['judul']}}</a>
                          @endforeach
                          </div>
                      </div>
                      <!--end of col-->
                      <div class="col-auto">
                          <button class="btn btn-lg btn-success" type="submit">Search</button>
                      </div>
                      <!--end of col-->
                  </div>
              </form>
          </div>
          <!--end of col-->
      </div>

      <hr>

      <form class="m-2" method="post" action="{{route('post')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" autocomplete="off" required>
              <p></p>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi/Berita</label>
            <div class="col-sm-12 col-md-7">
            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi kegiatan atau acara" style="height: 300px;" required></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Pilih Image</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="image">
            </div>
            <h6 class="p-2 mx-auto">*Max ukuran image/foto : 5 MB</h6>
          </div>
          
          
          <div class="form-group row mb-4">
            <div class="mx-auto button-submit">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form> 

    </div>

    <div class="collapse p-3" id="tambah" data-parent="#myGroup">
      <form class="m-2" method="post" action="{{route('post')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Kegiatan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" autocomplete="off" required>
              <p></p>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi/Berita</label>
            <div class="col-sm-12 col-md-7">
            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi kegiatan atau acara" style="height: 300px;" required></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Pilih Image</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" class="form-control" name="image">
            </div>
            <h6 class="p-2 mx-auto">*Max ukuran image/foto : 5 MB</h6>
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
                <a href="{{route('showAcara',['slug' => $a->slug])}}" target="_blank" class="btn btn-sm btn-outline-danger"><i class="fas fa-eye"></i></a>
                  <button data-toggle="modal" data-target="#edit-{{$a['id']}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-edit"></i></button>
                  <a href="{{route('deleteAcara',['id' => $a->id])}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
<script src="../js/editAcara.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
  <script>
  CKEDITOR.replace('deskripsi');
  </script>
@endsection