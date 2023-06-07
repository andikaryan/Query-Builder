<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RuanganRequest;
use Illuminate\Http\Request;
use App\Models\RuanganModel;
use Illuminate\Contracts\Session\Session;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = RuanganModel::all();
        return view('Ruangan', [
            'ruangan'=>$ruangan
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TambahRuangan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(RuanganRequest $request)
    {
        $ruangan_baru = new RuanganModel($request->all());
        $ruangan_baru->save();

        return redirect('/ruangan')->with('success','Data Ruangan Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruangan = RuanganModel::find($id);
        return view('/EditRuangan', ['ruangans' => $ruangan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RuanganRequest $request, string $id)
    {
        $ruangan = RuanganModel::find($id);
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->status = $request->status;
        $ruangan->save();
        return redirect('/ruangan');
    }

    public function destroy($id)
    {
        {
            $ruangan = RuanganModel::findOrFail($id);

            if ($ruangan->psn()->exists())  {
                return redirect('/ruangan')->with('error','Data Ruangan Tidak Dapat Dihapus Karena Berelasi Dengan Data Pasien!');
            }

            // Lakukan proses penghapusan data jika tidak ada relasi
            $ruangan->delete();

            // Redirect ke halaman yang sesuai setelah penghapusan berhasil
            return redirect('/ruangan')->with('success','Data Ruangan Berhasil Dihapus!');
        }

    }

    public function detail($id)
    {
        $ruangan = RuanganModel::find($id);
        return view('/DetailRuangan', ['ruangans' => $ruangan]);
    }

}
