@extends('layouts.app')

@section('content')

    <h1 style="text-align: center">Buku Angkatan Jurusan Teknik Informatika</h1>

    <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div class="ui-field-contain">
            <label for="id">NIM</label>
            <input type="number" name="id" id="id" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>
            <label for="chekbox">Ingat</label>
            <input type="checkbox" name="remember" id="chekbox">
        </div>
        <input type="submit" value="Masuk" data-inline="true">
    </form>

    <p>Belum punya akun? buat <a href="{{ url('/register') }}">di sini</a></p>
@endsection
