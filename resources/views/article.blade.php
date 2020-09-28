@extends('master.masterPost')

@section('header', 'Article')

@section('sidebar')
    <h1>Article {{ $id }}</h1>
@endsection

@section('konten')
    <h2>Artikel {{ $id }}</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus laborum voluptatem ex dolorum saepe. Reprehenderit deleniti repudiandae perferendis et fugiat, id qui cupiditate nobis cumque, quam dignissimos aperiam? Dolorem fugit facere dolore fuga, impedit asperiores esse nobis assumenda minima non, commodi eum soluta magnam blanditiis?</p>
@endsection

@section('user', 'Ridlo Suhardi')