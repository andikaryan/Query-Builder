<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Ruangan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/DetailPasienRuangan.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')
  <body>
    <div class="kembali">
        <a href="{{ url('admin/ruangan')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
            <div class="badan2">
                <div class="judul2">
                    Detail Ruangan
                </div>

                <div class="deskObat">
                    <table align="center" class="tabel">
                        <tr>
                            <td>Nama Ruangan</td>
                            <td>:</td>
                            <th>{{ $ruangans->nama_ruangan }}</th>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <th>{{ $ruangans->status }}</th>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

@endsection
