<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lppm extends Model
{
    use HasFactory;
    protected $fillable = [ 'email' ,
    'namaKetua' ,
    'perguruanTinggi' ,
    'alamatPT' ,
    'userjss' ,
    'readed' ];
}
