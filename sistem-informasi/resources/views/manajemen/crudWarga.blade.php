@extends('layout.main')
@section('title','Data Warga RW 02')
@section('halaman','Data Warga RW02')

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
              <tr style="color:black; text-align:center; font-size:13px;"">
                <td>1</td>
                <td>12335577</td>
                <td>Cindy Mawar Kasih</td>
                <td>P</td>
                <td>Bandung</td>
                <td>02</td>
                <td>
                  <div class="badge badge-pill badge-success">Active</div>
                </td>
                <td>
                  <a href="#" type="button" class="btn btn-sm btn-outline-primary fa fa-edit" data-toggle="modal" data-target="#modal1"></a>
                  <a href="#" class="btn btn-sm btn-outline-danger fa fa-trash">
                </td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
</div>
@endsection

@section('modal')
<!-- Modal Edit-->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput2">NIK</label>
          <input type="nik" class="form-control" id="exampleFormControlInput2" placeholder="NIK">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput3">Nama</label> 
            <input type="nama_lengkap" class="form-control" id="exampleFormControlInput3"  placeholder="Nama Lengkap">
        </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Perempuan</option>
              <option>Laki-laki</option>
            </select>
          </div> 

          <div class="form-group">
            <label for="exampleFormControlInput4">Tempat Lahir</label> 
            <input type="tempat_lahir" class="form-control" id="exampleFormControlInput4" placeholder="tempat lahir">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput5">Tanggal Lahir</label> 
            <input type="date" class="form-control" id="exampleFormControlInput5"  placeholder="tanggal lahir">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput6">Kelurahan</label> 
            <input type="kelurahan" class="form-control" id="exampleFormControlInput6"  placeholder="kelurahan">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput7">Kecamatan</label> 
            <input type="kecamatan" class="form-control" id="exampleFormControlInput7"  placeholder="kecamatan">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput7">Kota</label> 
            <input type="kota" class="form-control" id="exampleFormControlInput7"  placeholder="kota">
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
            <label for="exampleFormControlSelect4">Pendidikan</label>
            <select class="form-control" id="exampleFormControlSelect4">
              <option>SD</option>
              <option>SMP</option> 
              <option>SMA</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect3">Status Perwinan</label>
            <select class="form-control" id="exampleFormControlSelect3">
              <option>Menikah</option>
              <option>Belum Menikah</option> 
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput8">Created</label> 
            <input type="date" class="form-control" id="exampleFormControlInput8"  placeholder="tempat_lahir">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput8">Updated</label> 
            <input type="date" class="form-control" id="exampleFormControlInput8"  placeholder="tempat_lahir">
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
        
        <form action="">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput2">NIK</label>
          <input type="nik" class="form-control" id="exampleFormControlInput2" placeholder="NIK">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput3">Nama</label> 
            <input type="nama_lengkap" class="form-control" id="exampleFormControlInput3"  placeholder="Nama Lengkap">
        </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Perempuan</option>
              <option>Laki-laki</option>
            </select>
          </div> 

          <div class="form-group">
            <label for="exampleFormControlInput4">Tempat Lahir</label> 
            <input type="tempat_lahir" class="form-control" id="exampleFormControlInput4" placeholder="tempat lahir">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput5">Tanggal Lahir</label> 
            <input type="date" class="form-control" id="exampleFormControlInput5"  placeholder="tanggal lahir">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput6">Kelurahan</label> 
            <input type="kelurahan" class="form-control" id="exampleFormControlInput6"  placeholder="kelurahan">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput7">Kecamatan</label> 
            <input type="kecamatan" class="form-control" id="exampleFormControlInput7"  placeholder="kecamatan">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput7">Kota</label> 
            <input type="kota" class="form-control" id="exampleFormControlInput7"  placeholder="kota">
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
            <label for="exampleFormControlSelect4">Pendidikan</label>
            <select class="form-control" id="exampleFormControlSelect4">
              <option>SD</option>
              <option>SMP</option> 
              <option>SMA</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect3">Status Perwinan</label>
            <select class="form-control" id="exampleFormControlSelect3">
              <option>Menikah</option>
              <option>Belum Menikah</option> 
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput8">Created</label> 
            <input type="date" class="form-control" id="exampleFormControlInput8"  placeholder="tempat_lahir">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput8">Updated</label> 
            <input type="date" class="form-control" id="exampleFormControlInput8"  placeholder="tempat_lahir">
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection