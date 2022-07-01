<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPelanggan extends Model
{
    use HasFactory;

    protected $table = 'detail_pelanggan';
    protected $guarded =[];

    protected $primarykey ='id';
    protected $fillable = ['id', 'nama', 'alamat', 'no_tlp'];

    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class, 'pelanggan_id');
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class, 'pelanggan_id');
    }
}
