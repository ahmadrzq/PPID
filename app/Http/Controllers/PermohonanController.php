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
        return view('informasi.masuk');
    }

    public function diproses()
    {
        //
        return view('informasi.diproses');
    }

    public function selesai()
    {
        //
        return view('informasi.selesai');
    }

    public function ditolak()
    {
        //
        return view('informasi.ditolak');
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
        // $permohonan = Permohonan::find($id);
        // $permohonan->delete($permohonan);

        // return redirect()->back();
    }
}
