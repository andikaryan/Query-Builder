<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Models\PasienModel;
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
        return view('TambahPasien');
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

    /**
     * Untuk menampilkan halaman edit pasien yang sesuai id yang dipilih
     */
    //     public function edit($id)
    //     {
    //         $pasien = pasien::find($id);
    //         return view('editPasien')->with('pasiens', $pasien);
    //         // $items = DB::select('select * from pasiens where id=?', [$id]);


    //         if(count($pasien) <= 0){
    //             return "Data tidak ditemukan";
    //         }
    //         $item = $pasien[0];

    //         return view('EditPasien', [
    //             'pasiens' => $item
    //         ]);
    //     }

    //     /**
    //      * Untuk memperbarui data yang ada di database dan akan ditampilkan di halaman web
    //      */
    //     public function update(PasienRequest $request, $id)
    //     {
    //         $nama = $request -> input('nama');
    //         $ruangan = $request -> input('ruangan');
    //         $penyakit = $request -> input('penyakit');
    //         DB::table('pasiens')
    //             -> where([
    //                 'id' => $id
    //             ])
    //             -> update([
    //                 'nama' => $nama,
    //                 'ruangan' => $ruangan,
    //                 'penyakit' => $penyakit
    //             ]);
    //         return redirect('/pasien')->with('success','Data Pasien '.$nama. ' Berhasil Diperbarui!');
    //     }

    /**
     * Untuk menghapus data yang dipilih dari database maupun di web
     */
    public function destroy($id)
    {
        $ruangan = PasienModel::find($id);
        $ruangan->delete();
        return redirect('/pasien')->with('success','Data Pasien Berhasil Dihapus!');
    }

    //     public function detail($id)
    //     {
    //         $pasien = Pasien::find($id);
    //         return view('detailPasien')->with('pasiens', $pasien);
    //     }
}
