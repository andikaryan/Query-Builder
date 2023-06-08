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
        <a href="{{url ('/pasien')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Tambah Pasien</p>
        </div>

        <form action="{{ url('/tambah-pasien') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Pasien</label><br>
                <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien...">

                <label for="">Tanggal Lahir</label><br>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir...">

                <label for="">Tanggal Opname</label><br>
                <input type="date" name="tanggal_opname" class="form-control" placeholder="Tanggal Opname...">

                <label for="">Asal</label><br>
                <input type="text" name="asal" class="form-control" placeholder="Asal...">

                <label for="">Penyakit</label><br>
                <select name="dokter_id" class="form-control">
                    <option value="">-Pilih Penyakit-</option>
                    @foreach ($dokters as $item)
                        <option value="{{$item->id}}">{{$item->spesialis}}</option>
                    @endforeach
                </select>

                <label for="">Ruangan</label><br>
                <select name="ruangan_id" class="form-control">
                    <option value="">-Pilih Ruangan-</option>
                    @foreach ($ruangans as $item)
                        <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                    @endforeach
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
