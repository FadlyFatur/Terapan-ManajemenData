@extends('layout.main')
@section('title','Sunting Data Warga')
@section('halaman','Sunting Data Warga')

@section('css')
<link rel="stylesheet" href="{{asset('css/crudWarga.css')}}">
@endsection

@section('content')
<div class="container mt-5">
<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2"><i class="fa fa-plus"></i>Data Warga</a> 
  <div class="card">
			<div class="card-body">
        <div class="row">
          <div class="card-header">
            <h4>Data Warga RW 02</h4>
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
      

          <table class="table table-md table-bordered table-striped table-hover">
            <thead>
              <tr style="color:black; text-align:center; font-size:13px;"> 
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr style="color:black; text-align:center; font-size:13px;"">
                <td>1</td>
                <td>3746284682393</td>
                <td>Cindy</td>
                <td>082117775243</td>
                <td>Bandung</td>
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
@endsection

@section('modal')
<div class="modal fade" id="modal1" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="modal-dialog modal-dialog-centered modal-bottom-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal1Label" style="color:black;">Edit Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput2">Nama</label>
          <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="nama">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput3">No HP (Format:xxxxxxxxxxx)</label> 
          <input type="tel" class="form-control" id="exampleFormControlInput3" pattern="^\d{10}$" required placeholder="08138239822">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Status</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Active</option>
            <option>Tidak Active</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput4">Username</label> 
          <input type="username" class="form-control" id="exampleFormControlInput4" placeholder="username">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput5">Username</label> 
          <input type="password" class="form-control" id="exampleFormControlInput5" placeholder="password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Jabatan</label>
            <select class="form-control" id="exampleFormControlSelect2">
              <option>Ketua RW</option>
              <option>Ketua RT</option> 
              <option>Staff</option>
            </select>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </div>
</div>

<div class="modal fade" id="modal2" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered modal-bottom-right modal-notify modal-info" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modal2Label" style="color:black;">Tambah Staff</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="Input2">Nama</label>
                    <input type="name" class="form-control" id="Input2" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="Input1">Email</label>
                    <input type="email" class="form-control" id="Input1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="Input3">No HP (Format:xxxxxxxxxxx)</label> 
                    <input type="tel" class="form-control" id="Input3" pattern="^\d{10}$" required placeholder="08138239822">
                  </div>
                  <div class="form-group">
                    <label for="Select1">Status</label>
                    <select class="form-control" id="Select1">
                      <option>Active</option>
                      <option>Tidak Active</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Input4">Username</label> 
                    <input type="username" class="form-control" id="Input4" placeholder="username">
                  </div>
                  <div class="form-group">
                    <label for="Input5">Username</label> 
                    <input type="password" class="form-control" id="Input5" placeholder="password">
                  </div>
                  <div class="form-group">
                    <label for="Select2">Jabatan</label>
                      <select class="form-control" id="Select2">
                        <option>Ketua RW</option>
                        <option>Ketua RT</option> 
                        <option>Staff</option>
                      </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection