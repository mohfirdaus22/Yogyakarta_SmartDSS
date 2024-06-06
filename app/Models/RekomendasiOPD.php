<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiOPD extends Model
{
    use HasFactory;
    protected $table = 'rekomendasiopds';
    protected $fillable = [
        'id_kajian',
        'opd_id',
        'rekomendasi',
        'tindak_lanjut',
        'status',
        'readed'
    ];
}
