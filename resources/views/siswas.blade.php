<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Penilaian Siswa</title>
</head>
<body>
    <h1>Data Ujian Siswa</h1>
    <hr>
    <h3>Nama Peserta Ujian : {!!$nama!!}</h3>
    <h3>Nim  : {!!$nim!!}</h3>
    <h3>Nilai lo : {{$nilai}}</h3>
    <h3>Anda dinyatakan :
    @if ($nilai>70)
    {{'Lulus'}}
    @else
    {{'Tidak Lulus'}}
    @endif
</h3>
</body>
</html>