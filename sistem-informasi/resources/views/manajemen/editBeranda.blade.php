@extends('layout.main')
@section('title','Sunting Beranda')
@section('halaman','Sunting Tampilan Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/editBeranda.css')}}">
@endsection

@section('content')


  <!-- edit carousel -->
  <h2 class="section-title">Edit Foto Header/Beranda</h2>
  <div class="container d-flex justify-content-center">
  <div class="row edit-foto">

    <div class="col-md-4 mb-5">
      <img src="https://images.pexels.com/photos/1379655/pexels-photo-1379655.jpeg?cs=srgb&dl=pexels-jonas-von-werne-1379655.jpg&fm=jpg" class="img-edit" alt="" srcset="">
      <div class="footer-edit mt-1">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Ganti
      </button>
      </div>
    </div>

    <div class="col-md-4 mb-5">
      <img src="https://images.pexels.com/photos/2342406/pexels-photo-2342406.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="img-edit" alt="" srcset="">
      <div class="footer-edit mt-1">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
      Ganti
      </button>
      </div>
    </div>

    <div class="col-md-4 mb-5">
      <img src="https://images.pexels.com/photos/2802809/pexels-photo-2802809.jpeg?cs=srgb&dl=pexels-keegan-checks-2802809.jpg&fm=jpg" class="img-edit" alt="" srcset="">
      <div class="footer-edit mt-1">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Ganti
      </button>
      </div>
    </div>
  </div>
  </div>
  <p>*Ukuran Foto min 500x1000 pixel</p>
  <hr>

  <!-- edit kontak -->
  <h2 class="section-title">Edit Informasi Kontak</h2>
  <div class="card">
    <form action="{{ route('updateBeranda') }}" method="POST">
    @csrf

    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Kontak</label>
        <div class="col-sm-9">
          <input type="Text" class="form-control" name="kontak" placeholder="Kontak" value="{{$data['kontak']}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="Email" class="form-control" name="email"  placeholder="Email" value="{{$data['email']}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" value="{{$data['alamat']}}">
        </div>
      </div>
    </div>
    <div class="card-footer d-flex justify-content-center">       
      <button type="submit" class="btn btn-primary mr-1">Submit</button>
    </div>
    </form>
  </div>
  
@endsection
  
@section('modal')
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
      @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Unggah File</label>
            <input type="file" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('js')
<script src="{{asset('js/editBeranda.js')}}"></script>
@endsection