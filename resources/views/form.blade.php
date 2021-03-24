<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h1>Form Pendaftaran</h1>


                <form action="{{ route('form.cek') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="">
                        @error('nama') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"
                            value="Laki-laki">
                        <label class="form-check-label" for="">
                            Laki-laki
                        </label><br>
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"
                            value="Perempuan">
                        <label class="form-check-label" for="">
                            Perempuan
                        </label>
                        @error('jeniskelamin') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat"></textarea>
                        @error('alamat') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas">
                            <option value="MI">Managemen Informatika</option>
                            <option value="TI">Teknik Informatika</option>
                        </select>
                        @error('kelas') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
