<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const JK = ['Pria','Wanita'];

    public $incrementing = false;

    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_prodi',
        'id',
        'angkatan',
        'nama',
        'email',
        'password',
        'no_telepon',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat_asal',
        'alamat_tinggal',
        'foto',
        'jadawal_mk',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Prodi', 'id_prodi')->first();
    }

    public function postings()
    {
        return $this->hasMany('App\Postings');
    }
}
