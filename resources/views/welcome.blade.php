@extends('layouts.app')

@section('content')
    <h2>Ini adalah layanan buku angkatan Jurusan Teknik Informatika yang diberi nama BuTan.</h2>
    <p>Jika kamu punya akun silahkan</p>
    <a class="ui-btn" href="{{ route('login') }}">Masuk</a>
    <p>Jika belum silahkan</p>
    <a class="ui-btn" href="{{ route('register') }}">Daftar</a>
@endsection