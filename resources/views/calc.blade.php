<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h1>Tambah Tambahan</h1>
                <form class="mb-2" action="{{ route('calc.ah') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Angka Satu</label>
                        <input type="text" name="angkasatu" class="form-control">
                        @error('angkasatu') <div class="alert alert-danger mt-1" role="alert"> {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label>Angka Dua</label>
                        <input type="text" name="angkadua" class="form-control">
                        @error('angkadua') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>
                    <label>Pilih mas</label>

                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="operasi" value="Penjumlahan">
                        <label class="form-check-label" for="">
                            Tambah
                        </label><br>
                        <input class="form-check-input" type="radio" name="operasi" value="Pengurangan">
                        <label class="form-check-label" for="">
                            Kurang
                        </label><br>
                        <input class="form-check-input" type="radio" name="operasi" value="Perkalian">
                        <label class="form-check-label" for="">
                            Kali
                        </label><br>
                        <input class="form-check-input" type="radio" name="operasi" value="Pembagian">
                        <label class="form-check-label" for="">
                            Bagi
                        </label><br>
                        @error('operasi') <div class="alert alert-danger mt-1" role="alert"> {{ $message }} </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">hitung ak maz</button>
                </form>

                @if (Session::has('status'))
                    @if (Session::get('status')['operasi'] == 'Penjumlahan')
                        {{ 'Hasil ' . Session::get('status')['operasi'] . ' antara ' . Session::get('status')['angkasatu'] . ' dan ' . Session::get('status')['angkadua'] . ' adalah ' . (Session::get('status')['angkasatu'] + Session::get('status')['angkadua']) }}

                    @elseif(Session::get('status')['operasi'] == 'Pengurangan')
                        {{ 'Hasil ' . Session::get('status')['operasi'] . ' antara ' . Session::get('status')['angkasatu'] . ' dan ' . Session::get('status')['angkadua'] . ' adalah ' . (Session::get('status')['angkasatu'] - Session::get('status')['angkadua']) }}

                    @elseif(Session::get('status')['operasi'] == 'Perkalian')
                        {{ 'Hasil ' . Session::get('status')['operasi'] . ' antara ' . Session::get('status')['angkasatu'] . ' dan ' . Session::get('status')['angkadua'] . ' adalah ' . Session::get('status')['angkasatu'] * Session::get('status')['angkadua'] }}

                    @elseif(Session::get('status')['operasi'] == 'Pembagian')
                        {{ 'Hasil ' . Session::get('status')['operasi'] . ' antara ' . Session::get('status')['angkasatu'] . ' dan ' . Session::get('status')['angkadua'] . ' adalah ' . Session::get('status')['angkasatu'] / Session::get('status')['angkadua'] }}
                    @endif

                @endif

            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
