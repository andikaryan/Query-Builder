<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;


class ObatController extends Controller
{
    /**
     * Untuk menampilkan data obat dari database
     */
    public function index()
    {
        $obat =  DB::table('obats')->get();
        return view('obat', [
            'obat'=>$obat
        ]) ;
    }

    /**
     * Untuk menampilkan halaman tambah obat
     */
    public function create()
    {
        return view('TambahObat');
    }

    /**
     * Untuk mengirim data  obat baru ke database
     */
    public function simpan(ObatRequest $request)
    {

        $nama = $request -> input('nama');
        $kegunaan = $request -> input('kegunaan');
        $harga = $request -> input('harga');

        DB::table('obats') -> insert([
            'nama' => $nama,
            'kegunaan' => $kegunaan,
            'harga' => $harga
        ]);

        return redirect('/obat')->with('success', 'Data Obat Berhasil Ditambahkan!');

    }

    /**
     * Untuk menampilkan halaman edit obat yang sesuai id yang dipilih
     */
    public function edit($id)
    {
        $obat = obat::find($id);
        return view('editObat')->with('obats', $obat);


        if(count($obat) <= 0){
            return "Data tidak ditemukan";
        }
        $item = $obat[0];

        return view('Editobat', [
            'obats' => $item
        ]);
    }

    /**
     * Untuk memperbarui data yang ada di database dan akan ditampilkan di halaman web
     */
    public function update(obatRequest $request, $id)
    {
        $nama = $request -> input('nama');
        $kegunaan = $request -> input('kegunaan');
        $harga = $request -> input('harga');
        DB::table('obats')
            -> where([
                'id' => $id
            ])
            -> update([
                'nama' => $nama,
                'kegunaan' => $kegunaan,
                'harga' => $harga
            ]);
        return redirect('/obat')->with('success', 'Data Obat Berhasil Diperbarui!'); 
    }

    /**
     * Untuk menghapus data yang dipilih dari database maupun di web
     */
    public function destroy($id)
    {
        // DB::table('obats')->where(['id'=> $id]) -> delete();
        // return redirect('/obat')->with('success', 'Data Obat Berhasil Dihapus!');
            // Temukan data berdasarkan ID
        $data = Obat::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        // Hapus data
        $data->delete();
        return redirect('/obat')->with('success', 'Data Obat Berhasil Dihapus!');

    }
    public function detail($id)
    {
        $obat = obat::find($id);
        return view('detailObat')->with('obats', $obat);
    }
}