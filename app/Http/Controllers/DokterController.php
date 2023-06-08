<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokterModel;
use App\Http\Requests\DokterRequest;

class DokterController extends Controller
{
    /**
     * Untuk menampilkan data pasien dari database
     */
    public function index()
    {
        $dokter = DokterModel::all();
        return view('Dokter', [
            'dokter' => $dokter
        ]);
    }
     /**
     * Untuk menampilkan halaman tambah pasien
     */
    public function create()
    {
        return view('TambahDokter');
    }
     /**
     * Store a newly created resource in storage.
     */
    public function simpan(DokterRequest $request)
    {
        $dokter_baru = new DokterModel($request->all());
        $dokter_baru->save();

        return redirect('/dokter')->with('success','Data Ruangan Berhasil Ditambah!');
    }
     /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = DokterModel::find($id);
        return view('/EditDokter', ['dokters' => $dokter]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(DokterRequest $request, string $id)
    {
        $dokter = DokterModel::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->nomor_telepon = $request->nomor_telepon;
        $dokter->save();
        return redirect('/dokter');
    }
    public function destroy($id)
    {
        {
            $dokter = DokterModel::findOrFail($id);

            if ($dokter->psn()->exists())  {
                return redirect('/dokter')->with('error','Data Dokter Tidak Dapat Dihapus Karena Berelasi Dengan Data Pasien!');
            }

            // Lakukan proses penghapusan data jika tidak ada relasi
            $dokter->delete();

            // Redirect ke halaman yang sesuai setelah penghapusan berhasil
            return redirect('/dokter')->with('success','Data Dokter Berhasil Dihapus!');
        }

    }
    public function detail($id)
    {
        $dokter = DokterModel::find($id);
        return view('/DetailDokter', ['dokters' => $dokter]);
    }
}
