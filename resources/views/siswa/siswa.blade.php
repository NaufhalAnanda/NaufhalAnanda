<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Siswa</h1>
    <h2>Ini Adalah Detail siswa dari ID {{ $data['nis']}} </h2>
    <table>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>{{$data['nis']}}</td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{$data['nama_siswa']}}</td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>{{$data['jurusan']}}</td>
        </tr>

        <tr>
            <td>Tingkat</td>
            <td>:</td>
            <td>{{$data['tingkat']}}</td>
        </tr>


    </table>
</body>
</html>
