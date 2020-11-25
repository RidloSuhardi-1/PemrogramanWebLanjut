@extends('masterKuis.masterContent');

@section('title', 'Edit User')

@section('main')
<main role="main" class="container"><br><br>

    <div class="starter-template" style="margin-bottom: 15px;">
        <h3>Edit User</h3><br>
        <a href="{{ route('manageUsers') }}" class="btn btn-outline-info">< Kembali ke Kelola User</a>
    </div>

    <form action="/users/updateUser/{{ $user->id }}" method="POST" enctype="multipart/form-data" class="clearfix">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}"><br>
        <div class="form-group">
            <label for="title">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image-upload">Upload Profil</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgName" onchange="previewFile(this)" name="profile_image"></br>
                    <label class="custom-file-label" for="image-upload" id="fileName">
                    @if($user->profile_image == 'empty') Pilih foto profil @else {{ $user->profile_image }} @endif
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="image" style="display: block;">Preview</label>
            <img src="@if($user->profile_image == 'empty') {{ asset('storage/images/default.png') }} @else {{ asset('storage/'.$user->profile_image) }} @endif" class="img-fluid img-thumbnail" id="imgHolder" style="height: 200px;" alt="Gambar Preview">
        </div>
        @if(Auth::user()->id != $user->id)
        <div class="form-group">
            <label for="roles">Roles</label>

            <select name="roles" class="form-control" id="roles">
                <optgroup label="Current user">
                    <option value="{{ $user->roles }}">{{ $user->roles }}</option>
                </optgroup>
                <optgroup label="Change user">
                    <option value="User">User</option>
                    <option value="Administrator">Administrator</option>
                </optgroup>
            </select>
        </div>
        @endif
        <button type="submit" name="add" class="btn btn-primary float-right">Update Data</button>
    </form>
</main>
@endsection