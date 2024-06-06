<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jss',
        'nama',
        'email',
        'judul',
        'tahun',
        'keperluan',
        'instansi',
        'tanggal',
        'status', // 'status' => 'required|boolean
        'readed'
    ];
}
