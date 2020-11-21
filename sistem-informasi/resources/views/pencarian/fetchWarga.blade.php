@if (count($cariwarga)  > 0)
  @foreach($cariwarga as $c)
    <tr>
      <td>{{ $c->nik }}</td>
      <td>{{ $c->nama_lengkap }}</td>
      <td>{{ $c->jenis_kelamin }}</td>
      <td>{{ $c->tempat_lahir }} {{$c->tanggal_lahir}}</td>
      <td>{{ $c->agama->nama_agama }}</td>
      <td>{{ $c->alamat }} {{$c->kelurahan }} {{$c->kecamatan }}</td>
      <td>{{ $c->rw }} / {{$c->tabelRT->nama_rt }}</td>
      <td>{{ $c->kota }}</td>
      @if ($c->status == 1)
        <td><span class="badge badge-success">Aktif</span></td>  
      @else
        <td><span class="badge badge-danger">Tidak</span></td>  
      @endif
      <td>{{ $c->tabelKerja->kerja }}</td>
      <td>{{ $c->perkawinan }}</td>
    </tr>
  @endforeach
@else
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
@endif