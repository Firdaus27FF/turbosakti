<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jenisproduk;

class JenisProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisProduk::create([
            'gambar'=>'',
            'rasa'=>'Pedas Manis',
            'harga_jual'=>'50000'
        ]);
    }
}
