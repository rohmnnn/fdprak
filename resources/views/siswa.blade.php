<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datasiswa - xxx</title>
</head>

<body>

    <h1>Daftar Siswa 1 . Blade</h1>

    <ol>
        @foreach ($siswas as $siswa)
            <li>{{ $siswa }}</li>
        @endforeach
    </ol>

    <h1>Daftar Siswa 1 . PHP</h1>

    <ol>
        <?php foreach ($siswas as $siswa) : ?>
            <li><?php echo $siswa; ?></li>
        <?php endforeach; ?>
    </ol>



</body>

</html>
