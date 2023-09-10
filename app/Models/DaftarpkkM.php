<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarpkkM extends Model
{
    use HasFactory;
    protected $table = 'daftarpkk';
    protected $fillable = [
        'id',
        'nama_guru',
        'kelas'

    ];
}
