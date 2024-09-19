<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokters';
    protected $fillable = ['NamaDokter','spesialis', 'NoTelp'];
    
}
