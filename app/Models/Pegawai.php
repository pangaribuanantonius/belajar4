<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $guarded = [];
    public $incrementing = false;
    public function pinjaman(){
        return $this->hasMany(PinjamanBuku::class, 'id', 'pegawai_id');
    }
}
