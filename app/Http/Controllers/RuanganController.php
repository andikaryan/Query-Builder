<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuanganRequest;
use Illuminate\Http\Request;
use App\Models\RuanganModel;

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
    public function simpan(Request $request)
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
        return view('/EditRuangan', ['ruangan' => $ruangan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruangan = RuanganModel::find($id);
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->status = $request->status;
        $ruangan->save();
        return redirect('/ruangan');
    }
}
