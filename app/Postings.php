<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postings extends Model
{
    protected $fillable = [
        'id_user',
        'keterangan',
        'dir'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user')->first();
    }
}
