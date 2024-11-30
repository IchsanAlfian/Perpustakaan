<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Login Sistem </title>
</head>
<body>

    <div class="text-center mt-5">
        <h2> Login Aplikasi</h2>
        <p>silahkan masuk dengan akun yang sudah terdaftar</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label>Alamat Email</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">

                            <button class="btn btn-primary"> Login</button>

                            @if (session('gagal'))
                            <p class="text-danger">{{ session('gagal') }}</p>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>