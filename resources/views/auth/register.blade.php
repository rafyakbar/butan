@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">Buku Angkatan Jurusan Teknik Informatika</h1>
    <form action="{{ route('register') }}" method="post">
        {{ csrf_field() }}
        <div class="ui-field-contain">
            <label for="nim">NIM</label>
            <input type="number" name="id" id="nim" required><br>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>
            <label for="konfirmasi">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="konfirmasi" required>
        </div>
        <input type="submit" value="Daftar" data-inline="true">
    </form>
    <p>Sudah punya akun? masuk <a href="{{ url('/login') }}">di sini</a></p>
@endsection
