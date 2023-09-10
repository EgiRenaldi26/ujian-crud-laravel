<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiM extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id',
        'tanggal',
        'nama_barang',
        'harga_awal',
        'harga_jual',
        'qty',
        'total_jual',
        'laba',
        'keterangan'
    ];
}
