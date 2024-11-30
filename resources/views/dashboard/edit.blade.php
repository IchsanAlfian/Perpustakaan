@extends('layout')

@section('konten')
<h4>Edit Pengguna</h4>

<form action="{{ route('dashboard.update', $dashboard->id) }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $dashboard->nama }}" class="form-control mb-2">
    <label>email</label>
    <input type="text" name="email" value="{{ $dashboard->email }}"class="form-control mb-2">
    <label>password</label>
    <input type="text" name="password" value="{{ $dashboard->password}} "class="form-control mb-2">
    <label>status</label>
    <input type="text" name="status"value="{{ $dashboard->status }}"  class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>
@endsection