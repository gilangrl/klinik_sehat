<?php

namespace App\Models;

use App\Models\dokter;
use App\Models\pasien;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pemeriksaan extends Model
{
    protected $table = 'pemeriksaans';
    protected $fillable = ['idPasien','idDokter', 'idKategoris','TanggalPeriksa', 'Diagnosa','HasilPeriksaResep','harga'];
    public function pasien()
    {
        return $this->belongsTo(pasien::class, 'id');
    }
    public function dokter()
    {
        return $this->belongsTo(dokter::class, 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id');
    }
}
