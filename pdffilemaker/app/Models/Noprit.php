<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noprit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'jenis', 'panjang', 
        'lebar', 'sisi', 'jumlah', 'tarif_pajak', 'listrik',
        'tarif_jam', 'subtot_pajak', 'subtot_jam1', 'subtot_jam2', 'filename',
    ];
}
