@extends('layout.main')
@section('title','Data User')
@section('halaman','Data User')

@section('content')
<div class="card user-card-full p-3">
@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span>×</span>
    </button>
    {{ Session::get('sukses') }}
  </div>
</div>
@endif

@if ($message = Session::get('gagal'))
<div class="alert alert-danger alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span>×</span>
    </button>
    {{ Session::get('gagal') }}
  </div>
</div>
@endif
  <div class="card-header">
      <h4>Data User</h4>
    </div>


    <div class="table-responsive" style="color:black;">
      <p class="text-center" >Total Data Acara : <span id="total-record">{{$total_data}}</span></p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th class="text-center">Nomer Pegawai</th>
            <th class="text-center">Username</th>
            <th class="text-center" data-toggle="tooltip" data-placement="top" title="Mengecek apakah user sudah dihubungkan dengan staff">Ditautkan</th>
            <th class="text-center" data-toggle="tooltip" data-placement="top" title="Anda bisa memverifikasi user yang terdaftar">Verifikasi</th>
            <th class="text-center" data-toggle="tooltip" data-placement="top" title="Anda bisa mengatur hak akses user yang mendaftar">Level</th>
            <th class="text-center" data-toggle="tooltip" data-placement="top" title="Anda bisa menghapus data user">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $a)
          <tr class="text-center">
            <td>{{ $a['no_pegawai'] }}</td>
            <td>{{ $a['username'] }}</td>
            @if(empty($a->staff['user_id']))
            <td><a><div class="badge badge-light">Belum Ditautkan<i class="fas fa-times"></i></div></a></td>
            @else
            <td><div class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="ditautkan dengan staff : {{$a->staff->nama}}">Ditautkan<i class="fas fa-check-square"></i></div> </td>
            @endif
            @if(empty($a['verified_at']))
            <td><a href="{{route('verifiedUser',['id' => $a->id])}}"><div class="badge badge-light">Belum Terverifikasi <i class="fas fa-times"></i></div></a></td>
            @else
            <td><div class="badge badge-warning">Terverifikasi <i class="fas fa-check-square"></i></div> </td>
            @endif

            @if ($a['status'] != 2)
            <td><a href="{{route('levelUser',['id' => $a->id])}}"> <div class="badge badge-light">User</div> </a> </td>
            @else
            <td><a href="{{route('levelUser',['id' => $a->id])}}"> <div class="badge badge-warning">Admin</div> </a> </td>
            @endif
            <td>
              <a href="{{route('deleteUser',['id' => $a->id])}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection