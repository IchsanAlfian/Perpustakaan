<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center mt-3"> Selamat datang Perpustakaan</h1>
    <div class="text-center">
        <a href="{{ route('dashboard.tampil') }}" class="btn btn-primary">Kelola Data Pengguna</a>
    </div>
    
</body>
</html>