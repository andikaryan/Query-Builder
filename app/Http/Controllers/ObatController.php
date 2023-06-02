<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Untuk menampilkan data obat dari database
     */
    public function index()
    {
        $obat = DB::select('select * from obats');
        return view('Obat', [
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
     * Untuk mengirim data obat baru ke database
     */
    public function simpan(ObatRequest $request)
    {
        $nama = $request -> input('nama');
        $kegunaan = $request -> input('kegunaan');
        $harga = $request -> input('harga');

        $sql = "insert into obats (nama,kegunaan,harga) values (?,?,?)";
        DB::insert($sql,[$nama, $kegunaan, $harga]);

        return redirect('/obat');
    }


    /**
     * Untuk menampilkan halaman edit obat yang sesuai id yang dipilih
     */
    public function edit($id)
    {
        $items = DB::select('select * from obats where id=?', [$id]);

        if(count($items) <= 0){
            return "Data tidak ditemukan";
        }
        $item = $items[0];

        return view('EditObat', [
            'obats' => $item
        ]);
    }

    /**
     * Untuk memperbarui data yang ada di database dan akan ditampilkan di halaman web
     */
    public function update(ObatRequest $request, $id)
    {
        $nama = $request -> input('nama');
        $kegunaan = $request -> input('kegunaan');
        $harga = $request -> input('harga');

        $sql = "update obats set nama=?, kegunaan=?, harga=? where id=?";
        DB::update($sql,[$nama, $kegunaan, $harga,$id]);

        return redirect('/obat');
    }


    /**
     * Untuk menghapus data yang dipilih dari database maupun di web
     */
    public function destroy($id)
    {
        DB::delete('delete from obats where id=?',[$id]);
        return redirect('/obat');
    }
}
