<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = ['nama_pasien', 'tanggal_lahir', 'tanggal_opname', 'asal', 'dokter_id', 'ruangan_id'];

    public function rgn(){
        return $this->belongsTo(RuanganModel::class, 'ruangan_id');
    }

    public function dtr(){
        return $this->belongsTo(DokterModel::class, 'dokter_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($pasien) {
            $ruangan = RuanganModel::find($pasien->ruangan_id);
            if ($ruangan && $ruangan->status === 'Tersedia') {
                $ruangan->status = 'Tidak Tersedia';
                $ruangan->save();
            }
        });

        static::updating(function ($pasien) {
            $oldRuanganId = $pasien->getOriginal('ruangan_id');
            $newRuanganId = $pasien->ruangan_id;

            if ($oldRuanganId !== $newRuanganId) {
                $oldRuangan = RuanganModel::find($oldRuanganId);
                $newRuangan = RuanganModel::find($newRuanganId);

                if ($oldRuangan && $oldRuangan->status === 'Tidak Tersedia') {
                    $oldRuangan->status = 'Tersedia';
                    $oldRuangan->save();
                }

                if ($newRuangan && $newRuangan->status === 'Tersedia') {
                    $newRuangan->status = 'Tidak Tersedia';
                    $newRuangan->save();
                }
            }
        });

        static::deleted(function ($pasien) {
            $ruangan = RuanganModel::find($pasien->ruangan_id);
            if ($ruangan && $ruangan->status === 'Tidak Tersedia') {
                $ruangan->status = 'Tersedia';
                $ruangan->save();
            }
        });
    }
}
