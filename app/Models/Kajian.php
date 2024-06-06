<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'judul', 'tahun','lokasi','sektoral', 'latar', 'metodologi', 'pelaksana', 'data', 'file', 'unit_id'
    ];
}
