<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/EditPasienObat.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
  <body>
    <nav class="navbar bg-light">
        {{-- <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Navbar</span>
        </div> --}}
      </nav>
    <div class="kembali">
        <a href="{{ url('/pasien')}}">
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


        <form action="{{ url('/update-pasien/'.$pasiens->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form">
                <label for="">Nama Pasien</label><br>
                <input type="text" name="nama" class="form-control" placeholder="Nama Pasien..." value="{{$pasiens->nama}}">

                <label for="">Ruangan</label><br>
                <input type="text" name="ruangan" class="form-control" placeholder="Ruangan..." value="{{$pasiens->ruangan}}">

                <label for="">Penyakit</label><br>
                <input type="text" name="penyakit" class="form-control" placeholder="Penyakit..." value="{{$pasiens->penyakit}}">

                <div class="submit">
                    <input type="submit" value="Simpan">
                </div>

            </div>
          </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
