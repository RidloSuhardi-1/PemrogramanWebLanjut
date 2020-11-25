@extends('masterKuis.masterContent');

@section('title', 'Kelola User')

@section('main')
<style>
    button.btn-primary { border-radius: 0 5px 5px 0; }
    .form-control { border-radius: 5px 0 0 5px; }
</style>

<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola User</h1>
    </div>
    <a href="users/register" class="btn btn-primary">Tambah Data</a>
    <a href="/users/cetak_pdf" class="btn btn-success float-right" target="_blank">CETAK PDF</a><br><br>

    <form class="form-inline" action="/searchUser">
        <div class="form-group">
            @csrf
            <input class="form-control" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-primary">search</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Profil</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tgl gabung</th>
                <th scope="col">Role</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($user->isEmpty())
                <td colspan="7" class="text-center">Tidak ada data yang ditampilkan</td>
            @else
            @foreach($user AS $a => $users)
            <tr>
                <td class="text-center">{{ $a + $user->firstItem() }}</td>
                <td>
                    <img src="@if($users->profile_image == 'empty') {{ asset('storage/images/default.png') }} @else {{ asset('storage/'.$users->profile_image) }} @endif" alt="" width=50 height=50>
                </td>
                <td>
                {{ $users->name }}
                    @if($users->id == Auth::user()->id)
                        <div class="alert alert-success" role="alert" style="height: 3px; font-size: 12px; line-height: 3px; display: inline-block;">
                            Aktif saat ini
                        </div>
                    @endif
                </td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->created_at }}</td>
                <td>{{ $users->roles }}</td>
                <td><a href="users/editUser/{{ $users->id }}" class="badge badge-warning">Edit</a></td>
                @if($users->id == Auth::user()->id)
                    <td><a class="badge badge-danger" onclick="alert('Anda tidak bisa menghapus akun sendiri')">Hapus</a></td>
                @else
                    <td><a href="users/dropUser/{{ $users->id }}" class="badge badge-danger" onclick="return confirm('Hapus User  `{{ $users->name }}`')">Hapus</a></td>
                @endif
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

    <div class="wrapper">
          <div class="paginate">
              {{ $user->links() }}
          </div>
    </div>
</main>
@endsection
