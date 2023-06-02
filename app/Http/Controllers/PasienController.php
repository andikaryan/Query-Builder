<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Untuk menampilkan data pasien dari database
     */
    public function index()
    {
        $pasien =  DB::select('select * from pasiens');
        return view('Pasien', [
            'pasien'=>$pasien
        ]) ;
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

        $nama = $request -> input('nama');
        $ruangan = $request -> input('ruangan');
        $penyakit = $request -> input('penyakit');

        $sql = "insert into pasiens (nama,ruangan,penyakit) values (?,?,?)";
        DB::insert($sql,[$nama, $ruangan, $penyakit]);

        return redirect('/pasien');

    }

    /**
     * Untuk menampilkan halaman edit pasien yang sesuai id yang dipilih
     */
    public function edit($id)
    {
        $items = DB::select('select * from pasiens where id=?', [$id]);


        if(count($items) <= 0){
            return "Data tidak ditemukan";
        }
        $item = $items[0];

        return view('EditPasien', [
            'pasiens' => $item
        ]);
    }

    /**
     * Untuk memperbarui data yang ada di database dan akan ditampilkan di halaman web
     */
    public function update(PasienRequest $request, $id)
    {
        $nama = $request -> input('nama');
        $ruangan = $request -> input('ruangan');
        $penyakit = $request -> input('penyakit');

        $sql = "update pasiens set nama=?, ruangan=?, penyakit=? where id=?";
        DB::update($sql,[$nama, $ruangan, $penyakit,$id]);

        return redirect('/pasien');
    }

    /**
     * Untuk menghapus data yang dipilih dari database maupun di web
     */
    public function destroy($id)
    {
        DB::delete('delete from pasiens where id=?',[$id]);
        return redirect('/pasien');
    }


}
