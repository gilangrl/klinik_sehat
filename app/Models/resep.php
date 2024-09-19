<?php

namespace App\Models;

use App\Models\obat;
use App\Models\pemeriksaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class resep extends Model
{
    protected $table = 'reseps';
    protected $fillable = ['idPemeriksaan','idObat', 'jumlah'];
    public function pemeriksaan()
    {
        return $this->belongsTo(pemeriksaan::class, 'id');
    }
    public function obat()
    {
        return $this->belongsTo(obat::class, 'id');
    }
    
}
