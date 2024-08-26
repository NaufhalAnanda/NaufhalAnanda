@extends('layout.mainLayout')

@section('title','Student')

@section('content')
<h1>Halo Ini Halaman Data Siswa</h1>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Gender</th>
        <th>NIS</th>
        <th>Kelas</th>
    </tr>

@foreach ($siswa as $data )
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$data->nama_siswa}}</td>
    <td>{{$data->gender}}</td>
    <th>{{$data->nis}}</td>
    <td>{{$data->kelas->name}}</td>
</tr>
@endforeach
</table>
@endsection
