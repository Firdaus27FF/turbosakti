<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    
    protected $table ='jenis_produks';
    protected $primarykey ='id';
    protected $fillable = ['id', 'gambar', 'rasa', 'harga_jual'];

    public function pesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
