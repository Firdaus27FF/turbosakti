<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    use HasFactory;

    protected $table ='ongkir';
    protected $primarykey ='id';
    protected $fillable = ['id', 'nama_order', 'tanggal', 'berat', 'kurir', 'status'];
}
