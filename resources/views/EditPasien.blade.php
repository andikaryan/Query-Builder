<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/EditPasienRuangan.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>
<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')

<body>
    <div class="kembali">
        <a href="{{ url('admin/pasien')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Edit Data Pasien</p>
        </div>


        <form action="{{ url('admin/update-pasien/'.$pasiens->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form">
                <label for="">Nama Pasien</label><br>
                <input type="text" name="nama_pasien" class="form-control" value="{{$pasiens->nama_pasien}}">

                <label for="">Tanggal Lahir</label><br>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{$pasiens->tanggal_lahir}}">

                <label for="">Tanggal Opname</label><br>
                <input type="date" name="tanggal_opname" class="form-control" value="{{$pasiens->tanggal_opname}}">

                <label for="">Asal</label><br>
                <input type="text" name="asal" class="form-control" value="{{$pasiens->asal}}">

                <label for="">Penyakit</label><br>
                <input type="text" name="penyakit" class="form-control" value="{{$pasiens->penyakit}}">

                <label for="">Kategori Penyakit</label><br>
                <select name="dokter_id" class="form-control">
                    @foreach ($dokters as $item)
                        <option value="{{$item->id}}">{{$item->spesialis}}</option>
                    @endforeach
                </select>

                <label for="">Ruangan</label><br>
                <select name="ruangan_id" class="form-control">
                    <option value="{{ $pasiens->rgn->nama_ruangan }}">{{ $pasiens->rgn->nama_ruangan }}</option>
                    @foreach ($ruangans as $item)
                        <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                    @endforeach
                </select>

                <div class="submit">
                    <input type="submit" value="Simpan">
                </div>

            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
@endsection
