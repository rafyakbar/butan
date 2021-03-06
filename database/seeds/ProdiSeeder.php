<?php

use Illuminate\Database\Seeder;
use App\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    const TI = [
        'S1 Teknik Informatika',
        'S1 Sistem Informasi',
        'S1 Pendidikan Teknologi Informasi',
        'D III Manajemen Informatika'
    ];

    public function run()
    {
        foreach (static::TI as $value){
            Prodi::create([
                'nama' => $value
            ]);
        }
    }
}
