<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RuanganModel extends Model
{
    use HasFactory;
    protected $table = 'ruangans';
    protected $fillable = ['nama_ruangan', 'status'];

    public function psn(){
        return $this->hasOne(PasienModel::class,'ruangan_id');
    }

    public function scopeTersedia($status)
    {
        return $status->where('status', 'tersedia');
    }

}
