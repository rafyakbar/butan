<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editUmum(Request $request)
    {
        Auth::user()->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'id_prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_asal' => $request->alamat_asal,
            'alamat_tinggal' => $request->alamat_tinggal
        ]);

        return back()->with('message', 'umum_Data berhasil disimpan!');
    }

    public function editPassword(Request $request)
    {
        if (Hash::check($request->password_lama, Auth::user()->password)){
            if ($request->password_baru == $request->konfirmasi_password_baru){
                Auth::user()->update(['password' => bcrypt($request->password_baru)]);
                return back()->with('message', 'password_Password berhasil disimpan!');
            }
            return back()->with('message', 'password_Konfirmasi password salah!');
        }
        return back()->with('message', 'password_Password saat ini salah!');
    }
}
