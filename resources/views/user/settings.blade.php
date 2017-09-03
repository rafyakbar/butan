@extends('layouts.app')
@section('content')
    <div id="profil_image">
        <img src="@if(is_null(Auth::user()->dir)) {{ asset('img/profil.png') }} @endif" width="75%" height="75%">
    </div>
    <h1>Umum</h1>
    @if(session()->has('message'))
        @if(explode('_',session()->get('message'))[0] == 'umum')
            <div class="alert alert-info">{{ explode('_',session()->get('message'))[1] }}</div>
        @endif
    @endif
    <form action="{{ route('updatedataumum') }}" method="post" enctype="multipart/form-data" data-ajax="false">
        {{ csrf_field() }}
        <div class="ui-field-contain">
            <label for="foto">Foto (abaikan jika tidak memperbarui foto)</label>
            <input id="foto" type="file" name="foto" accept="image/jpeg"><br>

            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" value="{{ Auth::user()->nama }}"><br>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ Auth::user()->email }}"><br>

            <label for="no_telepon">No. telepon</label>
            <input id="no_telepon" type="number" name="no_telepon" value="{{ Auth::user()->no_telepon }}"><br>

            <label for="prodi">Prodi</label>
            <select id="prodi" name="prodi">
                @foreach(\App\Prodi::all() as $value)
                    <option value="{{ $value->id }}">{{ $value->nama }}</option>
                @endforeach
            </select><br>

            <label for="angkatan">Angkatan</label>
            <select id="angkatan" name="angkatan">
                @for($c = \Carbon\Carbon::now()->format('Y'); $c >= 2009 ; $c--)
                    <option value="{{ $c }}">{{ $c }}</option>
                @endfor
            </select><br>

            <label for="jk">Jenis kelamin</label>
            <select id="jk" name="jenis_kelamin">
                @foreach(\App\User::JK as $value)
                    @if($value == Auth::user()->jenis_kelamin)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @endforeach
                @foreach(\App\User::JK as $value)
                    @if($value != Auth::user()->jenis_kelamin)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                @endforeach
            </select><br>
            <label for="tanggal_lahir">Tanggal lahir</label>
            <input id="tanggal_lahir" type="date" value="{{ Auth::user()->tanggal_lahir }}"><br>

            <label for="alamat_asal">Alamat asal</label>
            <input id="alamat_asal" name="alamat_asal" value="{{ Auth::user()->alamat_asal }}"><br>

            <label for="alamat_tinggal">Alamat tinggal</label>
            <input id="alamat_tinggal" name="alamat_tinggal" value="{{ Auth::user()->alamat_tinggal }}">
        </div>
        <input type="submit" class="ui-btn" value="Simpan" data-inline="true">
    </form>
    <h1>Password</h1>
    @if(session()->has('message'))
        @if(explode('_',session()->get('message'))[0] == 'password')
            <div class="alert alert-info">{{ explode('_',session()->get('message'))[1] }}</div>
        @endif
    @endif
    <form action="{{ route('updatedatapassword') }}" method="post" data-ajax="false">
        {{ csrf_field() }}
        <div class="ui-field-contain">
            <label for="password_lama">Kata sandi saat ini</label>
            <input type="password" id="password_lama" name="password_lama" required><br>
            <label for="password_baru">Kata sandi baru</label>
            <input type="password" id="password_baru" name="password_baru" required><br>
            <label for="password_konfirmasi">Tulis ulang kata sandi baru</label>
            <input type="password" id="password_konfirmasi" name="konfirmasi_password_baru" required>
        </div>
        <input type="submit" class="ui-btn" value="Simpan" data-inline="true">
    </form>
@endsection