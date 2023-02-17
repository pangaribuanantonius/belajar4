<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamanBuku extends Model
{
    use HasFactory;
    protected $table = 'pinjaman_buku';
    protected $guarded = [];
    public $incrementing = false;
    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id');
    }
    public function buku(){
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
}
