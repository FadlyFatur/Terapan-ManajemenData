@if (count($cariwarga)  > 0)
  @foreach($cariwarga as $c)
    <tr>
      <td>{{ $c->nama_lengkap }}</td>
      <td>{{ $c->jenis_kelamin }}</td>
      <td>{{ $c->tempat_lahir }} {{$c->tanggal_lahir}}</td>
      <td>{{ $c->agama_id}}</td>
      <td>{{ $c->alamat }} {{$c->kelurahan }} {{$c->kecamatan }}</td>
      <td>{{$c->rt }} / {{ $c->rw }}</td>
      <td>{{ $c->kota }}</td>
      <td>{{ $c->kerja }}</td>
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
  </tr>
@endif