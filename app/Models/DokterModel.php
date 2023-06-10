<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PasienModel;

class DokterModel extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $fillable = ['nama_dokter', 'spesialis', 'nomor_telepon'];

    public function psn(){
        return $this->hasMany(PasienModel::class, 'dokter_id');
    }
}
