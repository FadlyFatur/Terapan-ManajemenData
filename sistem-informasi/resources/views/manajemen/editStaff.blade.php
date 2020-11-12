@extends('layout.main')
@section('title','Sunting Staff')
@section('halaman','Sunting Staff')

@section('content')
<div class="container mt-5">
<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2"><i class="fa fa-plus"></i> Staff</a> 
  <div class="card">
			<div class="card-body">
        <div class="row">
          <div class="card-header">
            <h4>Staff RW.02 Pelita</h4>
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
  
        <!-- Table -->
        <table class="table table-md table-bordered table-striped table-hover">
          <thead>
            <tr style="color:black; text-align:center; font-size:13px;"> 
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No.HP</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr style="color:black; text-align:center; font-size:13px;"">
              <td>1</td>
              <td>Agus</td>
              <td>agus123@gmail.com.com</td>
              <td>0812938231</td>
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
    </div>
  </div>
</div>


@endsection

@section('modal')
<!-- Modal -->
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
              <label for="exampleFormControlInput2">Nama</label>
              <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="nama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput3">No HP (Format:xxxxxxxxxxx)</label> 
              <input type="tel" class="form-control" id="exampleFormControlInput3" pattern="^\d{10}$" required placeholder="08138239822">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Active</option>
                <option>Tidak Active</option>
              </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Jabatan</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Ketua RW</option>
                  <option>Ketua RT</option> 
                  <option>Staff</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Nama User</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Agus</option>
                <option>Agus 2</option> 
                <option>Agus 3</option>
              </select>
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

<!-- Modal -->
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
              <label for="exampleFormControlInput2">Nama</label>
              <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="nama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput3">No HP (Format:xxxxxxxxxxx)</label> 
              <input type="tel" class="form-control" id="exampleFormControlInput3" pattern="^\d{10}$" required placeholder="08138239822">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Active</option>
                <option>Tidak Active</option>
              </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Jabatan</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Ketua RW</option>
                  <option>Ketua RT</option> 
                  <option>Staff</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Nama User</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Agus</option>
                <option>Agus 2</option> 
                <option>Agus 3</option>
              </select>
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