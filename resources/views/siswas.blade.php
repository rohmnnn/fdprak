<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswas</title>
</head>
<body>
    <h1>Data Ujian Siswa</h1>
    <hr>
    <h3>Nama Peserta Ujian : {{$nama}}</h3>
    <h3>Anda dinyatakan :</h3>
    @if ($nilai>70)
    {!!'<b>Lulus</b>'!!}
    @else
    {!!'<b>Tidak Lulus</b>'!!}
    @endif
</body>
</html>