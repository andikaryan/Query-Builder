<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/template')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')
<link rel="stylesheet" href="{{ asset('assets/css/Login.css')}}">

    <div class="judullog">
        <p style="font-size: 24px;">Selamat Datang!</p>
        <p>Silahkan masuk akun anda</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Masuk</p>
        </div>
        @if(Session::has('error'))
        <div class="alert alert-danger alert-block" role="alert" id="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success alert-block" role="alert" id="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <form action="{{ url('/login-proses') }}" method="post">
            @csrf

            <div class="form" method="post">

                <label for="">Nama Pengguna</label>
                <input type="text" name="email" placeholder="Email...">

                <label for="">Kata Sandi</label><br>
                <input type="password" name="password" placeholder="Kata Sandi...">

                <div class="submit">
                    <input type="submit" value="Masuk">
                </div>

            </div>
          </form>

    </div>

</body>
</html>

@endsection


<script type="text/javascript">
    $(function() {
      $('#alert').delay(3000).fadeOut();
      });
  </script>


