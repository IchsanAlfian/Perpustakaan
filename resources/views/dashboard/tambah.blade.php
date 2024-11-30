@extends('layout')

@section('konten')
<h4>Tambah Pengguna</h4>

<form action="{{ route('dashboard.submit') }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>email</label>
    <input type="text" name="email" class="form-control mb-2">
    <label>password</label>
    <input type="text" name="password" class="form-control mb-2">
    <label>status</label>
    <input type="text" name="status" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>
@endsection