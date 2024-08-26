@extends('layout.mainLayout')

@section('title', 'Data Siswa')

@section('content')




           <div class="mt-5">
    <h1>    Ini Adalah Halaman Home</h1>
                Selamat Datang, {{$Nama}}. Role Anda Adalah, {{$Role}}

                <br>
              <table class="table table-bordered">

                <td>nis</td>
                <td>nama_siswa</td>
                <td>jurusan</td>
                <td>tingkat</td>


                <h1>Data Siswa</h1>
                @foreach ($data as $siswa)
                <tr>
              <td> {{ $siswa['nis']}}</td>
              <td>  {{ $siswa['nama_siswa']}}</td>
              <td> {{ $siswa['jurusan']}}</td>
              <td> {{ $siswa['tingkat']}}</td>
               <br>
            </tr>
                @endforeach
            </table>
            </div>
            @endsection
