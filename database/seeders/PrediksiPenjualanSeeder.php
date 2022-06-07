<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrediksiPenjualan;

class PrediksiPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrediksiPenjualan::create([
            'jadwal'=>'1 minggu',
            'hasil_jumlah_produk'=>'200 ball',
            'hasil_bersih'=>'5000000'
        ]);
    }
}
