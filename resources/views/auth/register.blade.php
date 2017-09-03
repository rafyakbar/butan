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
    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
        {{--{{ csrf_field() }}--}}

        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

            {{--<div class="col-md-6">--}}
                {{--<input id="name" type="text" class="form-control" name="name"--}}
                       {{--value="{{ old('name') }}" required autofocus>--}}

                {{--@if ($errors->has('name'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

            {{--<div class="col-md-6">--}}
                {{--<input id="email" type="email" class="form-control" name="email"--}}
                       {{--value="{{ old('email') }}" required>--}}

                {{--@if ($errors->has('email'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

            {{--<div class="col-md-6">--}}
                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                {{--@if ($errors->has('password'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

            {{--<div class="col-md-6">--}}
                {{--<input id="password-confirm" type="password" class="form-control"--}}
                       {{--name="password_confirmation" required>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<div class="col-md-6 col-md-offset-4">--}}
                {{--<button type="submit" class="btn btn-primary">--}}
                    {{--Register--}}
                {{--</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
@endsection
