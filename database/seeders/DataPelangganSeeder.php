<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPelanggan;

class DataPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPelanggan::create([
            'username'=>'CobaDulu12',
            'password'=>'DuluCoba12',
            'nama'=>'Ach. Dani',
            'alamat'=>'Jl. Kembang Api No.11 C',
            'no_tlp'=>'087342342342'
        ]);
    }
}
