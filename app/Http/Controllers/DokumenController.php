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
use Response;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        //
        $dokumen = Dokumen::all();
        $dinas = Dinas::all();
        $jenis = Jenis::all();
        $kategori = Kategori::all();

        if ($request->has('kategori', 'jenis', 'dinas')){
            $dokumen = Dokumen::where('kategori_id', '=', $request->kategori)
            ->orwhere('jenis_id', '=', $request->jenis)
            ->orwhere('dinas_id', '=', $request->dinas)
            ->paginate(10);
        }
        
        return view('admin.dokumen.view', compact('dokumen', 'kategori', 'jenis', 'dinas'));
    }
    
    public function draft()
    {
        //
        $dokumen = Dokumen::all();
        $draft = Dokumen::where('status_dokumen_id', 1)->get();
        return view('admin.dokumen.draft', compact('dokumen', 'draft'));
    }

    public function publish()
    {
        //
        $dokumen = Dokumen::all();
        $publish = Dokumen::where('status_dokumen_id', 2)->get();
        return view('admin.dokumen.publish', compact('dokumen', 'publish'));
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
        $dokumen->user_id = 1;

        $dokumen->save();

        return redirect('dashboard/dokumen/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        //
        $dokumen = Dokumen::find($id);
        // $file= public_path() . "/file/dokumen/".$this->file;
        // return response()->download($dokumen->file);
        // return Storage::disk('file/dokumen/')->download($path, $file);
        $download_path = ( public_path() . '/file/dokumen/' . $dokumen->file );
        return( Response::download( $download_path ) );
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
        $dokumen = Dokumen::find($id);
        $dinas = Dinas::all();
        $jenis = Jenis::all();
        $tipe = Tipe::all();
        $kategori = Kategori::all();
        $status_dokumen = StatusDokumen::all();

        return view('admin.dokumen.edit', compact('dokumen', 'dinas', 'jenis', 'tipe', 'kategori', 'status_dokumen'));
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
        $dokumen = Dokumen::find($id);
        $dokumen->judul = $request->judul;
        $dokumen->kategori_id = $request->kategori_id;
        $dokumen->jenis_id = $request->jenis_id;
        $dokumen->tipe_id = $request->tipe_id;
        $dokumen->keterangan = $request->keterangan;
        $dokumen->status_dokumen_id = $request->status_dokumen_id;
        $dokumen->kandunganInfo = $request->kandunganInfo;
        $dokumen->dinas_id = $request->dinas_id;
        if($request->hasFile('file')){
            $request->file('file')->move('file/dokumen/', $request->file('file')->getClientOriginalName());
            $dokumen->file = $request->file('file')->getClientOriginalName();
            File::delete('file/dokumen/'.$request->oldfile);
        }

        $dokumen->save();
        return redirect('dashboard/dokumen/view');
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
