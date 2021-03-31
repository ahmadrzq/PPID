<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permohonan;
use App\Provinsi;
use File;


class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function semuaPermohonan()
    {
        //
        $permohonan = \App\Permohonan::all();
        return view('admin.informasi.v_permohonan', compact('permohonan'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meja()
    {
        //
        $provinsi = Provinsi::all();
        return view('admin.informasi.meja', compact('provinsi'));
    }

    public function masuk()
    {
        //
        $permohonan = Permohonan::all();
        $menunggu = Permohonan::where('status', 0)->get();
        return view('admin.informasi.pmasuk.masuk', compact('permohonan', 'menunggu'));
    }

    public function diproses()
    {
        //
        $permohonan = Permohonan::all();
        $diproses = Permohonan::where('status', 2)->get();
        return view('admin.informasi.v_proses', compact('permohonan', 'diproses'));
    }

    public function selesai()
    {
        //
        $permohonan = Permohonan::all();
        $selesai = Permohonan::where('status', 1)->get();
        return view('admin.informasi.v_selesai', compact('permohonan', 'selesai'));
    }

    public function ditolak()
    {
        //
        $permohonan = Permohonan::all();
        $ditolak = Permohonan::where('status', 3)->get();
        return view('admin.informasi.v_ditolak', compact('permohonan', 'ditolak'));
    }

    public function keberatan()
    {
        //
        return view('informasi.keberatan');
    }

    public function pemohon()
    {
        //
        $permohonan = \App\Permohonan::all();
        return view('admin.informasi.v_pemohon', compact('permohonan'));
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
        $permohonan = New Permohonan;
        $permohonan->nama = $request->nama;
        $permohonan->judul = $request->judul;
        $permohonan->kode = $request->kode;
        $permohonan->nik = $request->nik;
        $permohonan->jenisKelamin = $request->jenisKelamin;
        $permohonan->tempatLahir = $request->tempatLahir;
        $permohonan->tanggalLahir = $request->tanggalLahir;
        $permohonan->alamat = $request->alamat;
        $permohonan->tujuanInformasi = $request->tujuanInformasi;
        $permohonan->kota = $request->kota;
        $permohonan->pos = $request->pos;
        $permohonan->provinsi_id = $request->provinsi;
        $permohonan->telepon = $request->telepon;

        $permohonan->save();

        return redirect()->back();
    }

    public function terima($id){
        $permohonan = Permohonan::find($id);
        
        $status_sekarang = $permohonan->status;
 
        if($status_sekarang == 0){
            Permohonan::find($id)->update([
                'status'=>1
            ]);        
        }elseif($status_sekarang == 2){
            Permohonan::find($id)->update([
                'status'=>1
            ]);
        }elseif($status_sekarang == 3){
            Permohonan::find($id)->update([
                'status'=>1
            ]);
        }
 
        return view('admin.informasi.pmasuk.proses_terima', compact('permohonan'));
    }

    public function proses($id){
        $permohonan = Permohonan::find($id);
        
        $status_sekarang = $permohonan->status;
 
        if($status_sekarang == 0){
            Permohonan::find($id)->update([
                'status'=>2
            ]);        
        }elseif($status_sekarang == 1){
            Permohonan::find($id)->update([
                'status'=>2
            ]);
        }elseif($status_sekarang == 3){
            Permohonan::find($id)->update([
                'status'=>2
            ]);
        }
 
        return view('admin.informasi.v_permohonan', compact('permohonan'));
    }

    public function tolak($id){
        $permohonan = Permohonan::find($id);
        
        $status_sekarang = $permohonan->status;
 
        if($status_sekarang == 0){
            Permohonan::find($id)->update([
                'status'=>3
            ]);        
        }elseif($status_sekarang == 1){
            Permohonan::find($id)->update([
                'status'=>3
            ]);
        }elseif($status_sekarang == 2){
            Permohonan::find($id)->update([
                'status'=>3
            ]);
        }
 
        return view('admin.informasi.pmasuk.proses_tolak', compact('permohonan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
        return view('admin.informasi.pmasuk.detail', compact('permohonan'));
        
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
        // $permohonan = Permohonan::find($id);
        // $permohonan->delete($permohonan);

        // return redirect()->back();
    }
}
