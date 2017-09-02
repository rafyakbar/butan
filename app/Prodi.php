<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama'
    ];

    public function user($pengguna = null)
    {
        if(!is_null($pengguna))
            return $this->hasMany('App\User')->where('id_pengguna',$pengguna)->first();

        return $this->hasMany('App\User');
    }
}
