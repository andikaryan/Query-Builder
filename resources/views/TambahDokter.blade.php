<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/TambahPasienRuangan.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>
<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')

<body>

    <div class="kembali">
        <a href="{{url ('/dokter')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Tambah Dokter</p>
        </div>

        <form action="{{ url('/tambah-dokter') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Dokter</label><br>
                <input type="text" name="nama_dokter" class="form-control" placeholder="Nama Dokter...">

                <label for="">Spesialis</label><br>
                <input type="text" name="spesialis" class="form-control" placeholder="Spesialis...">

                <label for="">Nomor Telepon</label><br>
                <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor Telepon...">

                <div class="submit">
                    <input type="submit" value="Tambah">
                </div>

            </div>
        </form>

    </div>
</body>

</html>
@endsection
