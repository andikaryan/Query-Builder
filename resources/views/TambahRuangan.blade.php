<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ruangan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/TambahPasienRuangan.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>

<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')

<body>

    <div class="kembali">
        <a href="{{url ('admin/ruangan')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Tambah Ruangan</p>
        </div>

        <form action="{{ url('admin/tambah-ruangan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Ruangan</label><br>
                <input type="text" name="nama_ruangan" class="form-control" placeholder="Nama Ruangan...">

                <label for="">Status</label><br>
                <select name="status" class="form-control">
                    <option value="">-Status-</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>

                <div class="submit">
                    <input type="submit" value="Tambah">
                </div>

            </div>
        </form>

    </div>
</body>

</html>
@endsection
