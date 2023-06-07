<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = ['nama_pasien', 'tanggal_lahir', 'tanggal_opname', 'asal', 'penyakit', 'ruangan_id'];

    public function rgn(){
        return $this->belongsTo(RuanganModel::class, 'ruangan_id');
    }
}
