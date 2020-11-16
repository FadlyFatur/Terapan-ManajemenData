@extends('layout.main')
@section('title','Data Warga RW 02')
@section('halaman','Data Warga RW02')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/crudWarga.css') }}">
@endsection
@section('content')
<div class="container mt-5">
<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2"><i class="fa fa-plus"></i> Data Warga</a> 
  <div class="card">
			<div class="card-body">
        <div class="row"> 
          <div class="card-header">
            <h4>Data Warga RW.02 Pelita</h4>
              <form class="card-header-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      
          <-----Table---->
          <table class="table table-md table-bordered table-striped table-hover">
            <thead>
              <tr style="color:black; text-align:center; font-size:13px;"> 
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($wargas as $a)
              <tr>
                <td>{{$no++}}</td>
                <td>{{ $a['nik'] }}</td>
                <td>{{ $a['nama_lengkap'] }}</td>
                <td>{{ $a['jenis_kelamin'] }}</td>
                <td>{{ $a['alamat'] }}</td>
                <td>{{ $a['rt'] }}</td>
                @if ($a['status'] != 0)
                <td><div class="badge badge-success">Aktif</div></td>
                @else
                <td><div class="badge badge-success">Non-Aktif</div></td>
                @endif
                <!-- <td></td> -->
                <td>
                <a href="#" type="button" class="btn btn-sm btn-outline-primary fa fa-edit" data-toggle="modal" data-target="#modal1"></a>
                <a href="{{route('deleteWarga',['id'=>$a->id])}}" class="btn btn-sm btn-outline-danger fa fa-trash">
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>
`@endsection`

@section('modal')
<!-- Modal Edit-->
  @foreach ($wargas as $a)
    <div class="modal fade" id="edit-{{$a['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="m-2" method="post" action="{{route('updateWarga',['id' => $a->id])}}" enctype="multipart/form-data">
              <div class="modal-body">
              @csrf
    
          <div class="form-group">
            <label for="exampleFormControlInput2">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan nik" autocomplete="off" value="{{$a['nik']}}" required>
          </div>


          <div class="form-group">
              <label for="exampleFormControlInput3">Nama</label> 
              <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukan nama lengkap" autocomplete="off" value="{{$a['nama_lengkap']}}" required>
          </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select class="form-control" id="exampleFormControlSelect1" value="{{$a['jenis_kelamin']}}" required>
                <option>Perempuan</option>
                <option>Laki-laki</option>
              </select>
            </div> 

            <div class="form-group">
              <label for="exampleFormControlInput4">Tempat Lahir</label> 
              <input type="tempat_lahir" class="form-control" id="exampleFormControlInput4" placeholder="tempat lahir" value="{{$a['tempat_lahir']}}" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput5">Tanggal Lahir</label> 
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Masukan tanggal lahir" autocomplete="off" value="{{$a['tanggal_lahir']}}" required>
            </div>

            <div class="form-group">
              <label>alamat</label>
              <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan alamat" style="height: 300px;" required>{{$a['alamat']}}</textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput6">Kelurahan</label> 
              <input type="text" name="kelurahan" id="kelurahan" class="form-control" placeholder="Masukan kelurahan" autocomplete="off" value="{{$a['kelurahan']}}" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput7">Kecamatan</label> 
              <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukan kecamatan" autocomplete="off" value="{{$a['kecamatan']}}" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput7">Kota</label> 
              <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukan kota" autocomplete="off" value="{{$a['kota']}}" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Active</option>
                <option>Tidak Active</option>
              </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">RT</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>1</option>
                  <option>2</option> 
                  <option>3</option>
                </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect3">Agama</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>Islam</option>
                <option>Khatolik</option> 
                <option>Hindu</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect4">Pekerjaan</label>
              <select class="form-control" id="exampleFormControlSelect4">
                <option>Pelajar/Mahasiswa</option>
                <option>Buruh</option> 
                <option>Belum Bekerja</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect3">Status Perwinan</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>Menikah</option>
                <option>Belum Menikah</option> 
              </select>
            </div>
          
          </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  @endforeach


<!-- Modal Tambah-->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <form action="{{route('tambahWarga')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput2">Nomer Induk Kependudukan</label>
            <input type="nik" name="nik" class="form-control" id="exampleFormControlInput2" placeholder="NIK">
          </div>

          <div class="form-group">
              <label for="exampleFormControlInput3">Nama</label> 
              <input type="nama_lengkap" name="nama_lengkap" class="form-control" id="exampleFormControlInput3"  placeholder="Nama Lengkap">
          </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                <option>P</option>
                <option>L</option>
              </select>
            </div> 

            <div class="form-group">
              <label for="exampleFormControlInput4">Tempat Lahir</label> 
              <input type="tempat_lahir" name="tempat_lahir" class="form-control" id="exampleFormControlInput4" placeholder="tempat lahir">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput5">Tanggal Lahir</label> 
              <input type="date" class="form-control" name="tanggal_lahir" id="exampleFormControlInput5"  placeholder="tanggal lahir">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput6">Kelurahan</label> 
              <input type="kelurahan" name="kelurahan" class="form-control" id="exampleFormControlInput6"  placeholder="kelurahan">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput7">Kecamatan</label> 
              <input type="kecamatan" name="kecamatan" class="form-control" id="exampleFormControlInput7"  placeholder="kecamatan">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput7">Kota</label> 
              <input type="kota" name="kota" class="form-control" id="exampleFormControlInput7"  placeholder="kota">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">RT</label>
                <select class="form-control" id="exampleFormControlSelect2" name="rt">
                  <option>1</option>
                  <option>2</option> 
                  <option>3</option>
                </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect3">Agama</label>
              <select class="form-control" id="exampleFormControlSelect3" name="agama">
                <option>Islam</option>
                <option>Khatolik</option> 
                <option>Hindu</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect4">Pekerjaan</label>
              <select class="form-control" id="exampleFormControlSelect4" name="kerja">
                <option>Pelajar/Mahasiswa</option>
                <option>Buruh</option> 
                <option>Belum Bekerja</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect3">Status Perwinan</label>
              <select class="form-control" id="exampleFormControlSelect3" name="perkawinan">
                <option>Menikah</option>
                <option>Belum Menikah</option> 
              </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
