<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(JenisProdukSeeder::class);
        $this->call(StokProdukSeeder::class);
        $this->call(KeuanganSeeder::class);
        $this->call(PrediksiPenjualanSeeder::class);
        $this->call(DetailPelangganSeeder::class);
        $this->call(PembayaranSeeder::class);
        $this->call(PemesananSeeder::class);
    }
}
