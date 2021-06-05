<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{


    // public function index()
    // {
    //     return view('pasien1461900124');
    // }
    // public function tambah()
    // {
    //     return view('tambahpasien1461900124');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = \App\Models\Pasien::All(); return view('pasien1461900124' , ['pasien' => $pasien]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpasien1461900124');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
        $id = $request->get('id');
        $nama = $request->get('nama'); //Menyimpan data kedalam tabel
        $alamat = $request->get('alamat'); //Menyimpan data kedalam tabel
        $save_pasien = new \App\Models\Pasien;
        $save_pasien->id = $id;
        $save_pasien->nama = $nama;
        $save_pasien->alamat = $alamat;
        $save_pasien->save();
        return redirect()->route('pasien1461900124.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien_edit = \App\Models\Pasien::findOrFail($id); return view('editpasien1461900124', ['pasien' => $pasien_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien->nama = $request->get('nama');
        $pasien->nbi = $request->get('');
        $pasien->save();
        return redirect()->route('pasien1461900124.index', [$id]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien1461900124.index'); 
    }
}
