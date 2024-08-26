@extends('layout.mainLayout')

@section('title','class')

@section('content')
<h1>Halo Ini Halaman class</h1>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>

    </tr>

@foreach ($siswa as $data )
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$data->name}}</td>
</tr>
@endforeach
</table>
@endsection
