<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailNoprit extends Model
{
    use HasFactory;

    protected $fillable = [
        'noprit_id', 'jenis', 'panjang', 
        'lebar', 'sisi', 'jumlah', 'kelas_jalan', 'tarif_pajak', 'listrik',
        'tarif_jam', 'subtot_pajak', 'subtot_jam1', 'subtot_jam2',
    ];
}
