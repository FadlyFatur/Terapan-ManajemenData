@extends('layout.main')
@section('title','Cari Data Warga')
@section('halaman','Pencarian Data Warga')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cari.css') }}">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> --}}
@endsection
@section('content')
<div class="container">
  <form class="formSearch">
    <div class="input-group md-form form-sm form-2 pl-0">
      <input class="form-control my-0 py-1 red-border" id="searchWarga" type="text" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <a href="" class="btnSubmit">
          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
          aria-hidden="true"></i></span> 
        </a>
      </div>
    </form>
  </div>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered tableWarga">
      <thead class="bg-primary">
        <tr>
          <th scope="col" class="text-white">NIK</th>
          <th scope="col" class="text-white">Nama Lengkap</th>
          <th scope="col" class="text-white">Jenis Kelamin</th>
          <th scope="col" class="text-white">TTL</th>
          <th scope="col" class="text-white">Agama</th>
          <th scope="col" class="text-white">Alamat</th>
          <th scope="col" class="text-white">RT/RW</th>
          <th scope="col" class="text-white">Kota</th>
          <th scope="col" class="text-white">Status</th>
          <th scope="col" class="text-white">Pekerjaan</th>
          <th scope="col" class="text-white">Status Perkawinan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="11" class="text-center">Mengambil data <i class="fa fa-sync fa-spin"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('js')
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
      fetch(true);
    });

    $(".formSearch").submit(function(e){
      e.preventDefault();
      fetch(false);
    })

    $(".btnSubmit").click(function(e){
      e.preventDefault();
      fetch(false);
    });
    
    function fetch(reinitial = false){
      console.log($("#searchWarga").val());
      $.ajax({
        method: 'get',
        url: '/pencarian/warga/fetch',
        data : {
          query: $("#searchWarga").val()
        },
        beforeSend : function(){
          $("tbody").html('<tr>'+
            '<td colspan="11" class="text-center">Mengambil data <i class="fa fa-sync fa-spin"></i></td>'+
          '</tr>');
        },
        success : function(data){
          $("tbody").html(data);
          if(reinitial){
            $(".tableWarga").DataTable({
              lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
              pageLength: 10,
              sDom:"ltipr",//
              searching: false
            });
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(thrownError);
        }
      })
    }
  </script>
@endsection