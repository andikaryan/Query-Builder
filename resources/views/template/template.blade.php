<!-- Membuat template ini agar navbar tetap sama pad saat pindah halaman dari pasien ke obat atau sebaliknya -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit DR.Agus</title>
    <link rel="stylesheet" href="{{ asset('assets/css/pasienObat.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Navbar -->
<nav style="background-color: #0077B6;" class="navbar">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-white">Rumah Sakit Dr. Agus</span>
      </div>
    </nav>
    <!-- Yield disini untuk menampilkan halaman yang berada di @section('main-content') pada pasien maupun obat -->
    @yield('main-content')