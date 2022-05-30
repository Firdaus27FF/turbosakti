<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StokProduk;

class StokProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StokProduk::create([
            'jumlah'=>'100',
            'tanggal_produksi'=>'2022-01-03',
            'harga_per_ball'=>'5000'
        ]);
    }
}
