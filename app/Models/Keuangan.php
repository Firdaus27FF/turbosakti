<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table ='keuangan';
    protected $primarykey ='id';
    protected $fillable = ['id', 'tanggal', 'jumlah_pemasukan', 'jumlah_pengeluaran'];
}
