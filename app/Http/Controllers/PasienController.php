<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Models\PasienModel;
use App\Models\RuanganModel;
use App\Models\DokterModel;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Untuk menampilkan data pasien dari database
     */
    public function index()
    {
        $pasien = PasienModel::all();
        return view('Pasien', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Untuk menampilkan halaman tambah pasien
     */
    public function create()
    {
        $ruangans = RuanganModel::tersedia()->get();
        $dokters = DokterModel::all();
        return view('TambahPasien', compact('ruangans','dokters'));

    }

    /**
     * Untuk mengirim data  pasien baru ke database
     */
    public function simpan(PasienRequest $request)
    {
        $pasien_baru = new PasienModel($request->all());
        $pasien_baru->save();

        return redirect('/pasien')->with('success', 'Data Pasien Berhasil Ditambah!');
    }

    public function edit(string $id)
    {
        $ruangans = RuanganModel::tersedia()->get();
        $pasien = PasienModel::find($id);
        return view('/EditPasien', compact('ruangans'), ['pasiens' => $pasien]);
    }

    public function update(PasienRequest $request, string $id)
    {
        $pasien = PasienModel::find($id);
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->tanggal_opname = $request->tanggal_opname;
        $pasien->asal = $request->asal;
        $pasien->penyakit = $request->penyakit;
        $pasien->ruangan_id = $request->ruangan_id;
        $pasien->save();
        return redirect('/pasien')->with('success', 'Data Pasien Berhasil Diubah!');
    }
    public function destroy($id)
    {
        $pasien = PasienModel::find($id);
        $pasien->delete();
        return redirect('/pasien')->with('success', 'Data Pasien Berhasil Dihapus!');
    }

    public function detail($id)
    {
        $ruangans = RuanganModel::tersedia()->get();
        $pasien = PasienModel::find($id);
        return view('/DetailPasien', compact('ruangans'), ['pasiens' => $pasien]);
    }
}
