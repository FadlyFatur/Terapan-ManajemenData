@extends('layout.main')
@section('title','Sunting Beranda')
@section('halaman','Sunting Tampilan Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/editBeranda.css')}}">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h2 class="section-title">Pengelolaan Beranda</h2>
  </div>
  <div class="card-body">
  
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

    @if ($message = Session::get('gagal'))
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        Gagal disimpan.
      </div>
    </div>
    @endif

    @if ($message = Session::get('sukses-update'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        Data Berhasil Disimpan.
      </div>
    </div>
    @endif

    @if ($message = Session::get('Gagal-update'))
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        Data Gagal Disimpan.
      </div>
    </div>
    @endif

    <div class="accordion" id="accordionExample">
      <div class="container-fluid">
        <div class="" id="headingOne">
            <a class="btn btn-primary btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-plus"></i> Edit Kontak
            </a>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="container mt-5">
          <form action="{{ route('updateBeranda') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Kontak</label>
              <input type="Text" class="form-control" name="kontak" placeholder="Kontak" value="{{$data['kontak']}}">
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Email</label>
              <input type="Email" class="form-control" name="email"  placeholder="Email" value="{{$data['email']}}">
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" value="{{$data['alamat']}}">
            </div>
            <div class="card-footer d-flex justify-content-center">       
              <button type="submit" class="btn btn-primary mr-1">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      <hr>
      <div class="container-fluid">
        <div class="" id="headingTwo">
          <a class="btn btn-primary btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-plus"></i> Edit Foto Header
          </a>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="container p-2">
            <div class="header-img text-center">
              <img src="https://images.pexels.com/photos/1379655/pexels-photo-1379655.jpeg?cs=srgb&dl=pexels-jonas-von-werne-1379655.jpg&fm=jpg" class="img-fluid" alt="" srcset="">
              <div class="footer-edit mt-2 text-center">
                <button type="button" class="btn btn-primary" id="gambar1" data-toggle="modal" data-target="#gambar1">
                  Ganti
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container-fluid">
        <div class="" id="headingThree">
            <a class="btn btn-primary btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <i class="fas fa-plus"></i> Maintenance/Perawatan
            </a>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
  
@section('modal')
<div class="modal fade" id="" value="" data-backdrop="static" data-keyboard="false" tabindex="-1" 
aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="m-2" method="post" action="{{route('uploadGambar')}}" enctype="multipart/form-data">
      @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Unggah File</label>
            <input type="file" name="gambar" value="" class="form-control input-modal">
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="submit" class="btn btn-primary">Update!</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script src="{{asset('js/editBeranda.js')}}"></script>
@endsection