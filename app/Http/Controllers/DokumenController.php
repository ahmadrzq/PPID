<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\Dinas;
use App\Jenis;
use App\Tipe;
use App\StatusDokumen;
use App\Kategori;
use File;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        //
        $dokumen = \App\Dokumen::all();
        return view('admin.dokumen.view', compact('dokumen'));
    }

    public function draft()
    {
        //
        return view('dokumen.draft');
    }

    public function publish()
    {
        //
        return view('dokumen.publish');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        $dinas = Dinas::all();
        $jenis = Jenis::all();
        $tipe = Tipe::all();
        $kategori = Kategori::all();
        $status_dokumen = StatusDokumen::all();
        
        return view('admin.dokumen.input', compact('dinas', 'jenis', 'tipe', 'kategori', 'status_dokumen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dokumen = New Dokumen;
        $dokumen->judul = $request->judul;
        $dokumen->kategori_id = $request->kategori;
        $dokumen->jenis_id = $request->jenis;
        $dokumen->tipe_id = $request->tipe;
        if($request->hasFile('file')){
            $request->file('file')->move('file/dokumen/', $request->file('file')->getClientOriginalName());
            $dokumen->file = $request->file('file')->getClientOriginalName();
        }
        $dokumen->keterangan = $request->keterangan;
        $dokumen->status_dokumen_id = $request->status_dokumen;
        $dokumen->kandunganInfo = $request->kandunganInfo;
        $dokumen->dinas_id = $request->dinas;

        $dokumen->save();

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        //
        $dokumen = Dokumen::find($id);
        $dokumen->delete($dokumen);
        File::delete('file/dokumen/'.$dokumen->file);

        return redirect()->back();
    }
}
