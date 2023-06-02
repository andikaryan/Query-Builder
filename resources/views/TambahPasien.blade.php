<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/TambahPasienObat.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
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
                <input type="text" name="nama" class="form-control" placeholder="Nama Pasien...">

                <label for="">Ruangan</label><br>
                <input type="text" name="ruangan" class="form-control" placeholder="Ruangan...">

                <label for="">Penyakit</label><br>
                <input type="text" name="penyakit" class="form-control" placeholder="Penyakit...">

                <div class="submit">
                    <input type="submit"  value="Tambah">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
