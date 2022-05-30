<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapelanggan extends Model
{
    use HasFactory;

    protected $table ='data_pelanggan';
    protected $primarykey ='id';
    protected $fillable = ['id', 'username', 'password', 'nama', 'alamat', 'no_tlp'];


    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class, 'pelanggan_id');
    }
}
