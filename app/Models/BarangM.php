<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangM extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'barcode',
        'nama_barang',
        'jumlah_barang',
        'harga',
        'tanggal_masuk'
    ];
}
