@extends('layout')

@section('konten')


<div class="d-flex">
    <h4>List Pengguna</h4>
   
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('dashboard.tambah') }}">Tambah Pengguna</a>
    </div>
</div>
<table class="table">
    <tr>
        <td>No</th>
        <th>Nama</th>
        <th>email</th>
        <th>Password</th>
        <th>Status</th>
    </tr>
    @foreach ($dashboard as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->email }}</td>
        <td>{{( $data->password)}}</td>
        <td>{{ $data->status }}</td>
        <td>
            <a href="{{ route('dashboard.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('dashboard.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>
@endsection