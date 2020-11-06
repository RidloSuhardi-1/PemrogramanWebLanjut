@extends('masterKuis.masterContent');

@section('title', 'Kelola Artikel')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola User</h1>
    </div>
    <a href="users/register" class="btn btn-primary">Tambah Data</a><br><br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tgl gabung</th>
                <th scope="col">Role</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user AS $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->created_at }}</td>
                <td>{{ $a->roles }}</td>
                <td><a href="users/editUser/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="users/dropUser/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Hapus User  `{{ $a->name }}`')">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection