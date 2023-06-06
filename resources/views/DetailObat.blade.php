<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data obat</title>
    <link rel="stylesheet" href="{{ asset('assets/css/DetailPasienObat.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')
  <body>
    <div class="kembali">
        <a href="{{ url('/obat')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
            <div class="badan2">
                <div class="judul2">
                    Detail Obat
                </div>

                <div class="deskObat">
                    <table align="center" class="tabel">
                        <tr>
                            <td>Nama Obat</td>
                            <td>:</td>
                            <th>{{ $obats->nama }}</th>
                        </tr>
                        <tr>
                            <td>Kegunaan</td>
                            <td>:</td>
                            <th>{{ $obats->kegunaan }}</th>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <th>Rp {{ $obats->harga }}</th>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

@endsection
