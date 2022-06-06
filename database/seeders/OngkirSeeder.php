<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ongkir;

class OngkirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ongkir::create([
            'nama_order'=>'Ach. Dani',
            'tanggal'=>'2022-01-03',
            'berat'=>'3 kg',
            'kurir' =>'JNE',
            'status' =>'selesai'
        ]);
    }
}
