<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailPelanggan;

class DetailPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailPelanggan::create([
            'nama'=>'Ach. Dani',
            'alamat'=>'Jl. Kembang Api No.11 C',
            'no_tlp'=>'087342342342'
        ]);
    }
}
