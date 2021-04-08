<?php

namespace App\Http\Controllers;

use App\Berita;
use App\User;
use App\Dokumen;
use App\Permohonan;
use App\Kategori;
use App\Jenis;
use App\Dinas;
use App\Slider;
use Auth;
use Illuminate\Http\Request;
use File;
use Response;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        $dokumen = Dokumen::all();
        $permohonan = Permohonan::all();
        $users = User::all();
        $slider = Slider::all();
        return view('web.beranda', compact('berita', 'dokumen', 'permohonan', 'users','slider'));
    }

    public function show($id)
    {
        $berita = Berita::findorfail($id);
        return view('web.berita', compact('berita'));
    }


    public function cariDok(Request $request)
    {
        //
        $dokumen = Dokumen::all();
        $dinas = Dinas::all();
        $jenis = Jenis::all();
        $kategori = Kategori::all();
        $berkala = Dokumen::where('kategori_id','=','1')->count();
        $sertamerta = Dokumen::where('kategori_id','=','2')->count();
        $setiapsaat = Dokumen::where('kategori_id','=','3')->count();
        $total = Dokumen::where('kategori_id', '1')
        ->orwhere('kategori_id','=','2')
        ->orwhere('kategori_id','=','3')
        ->count();

        if ($request->has('kategori', 'jenis', 'dinas')){
            $dokumen = Dokumen::where('kategori_id', '=', $request->kategori)
            ->orwhere('jenis_id', '=', $request->jenis)
            ->orwhere('dinas_id', '=', $request->dinas)
            ->paginate(10);
        }
        
        return view('web.dokumen', compact('dokumen', 'kategori', 'jenis', 'dinas', 'berkala', 'sertamerta', 'setiapsaat', 'total'));
    }

    public function detailDokumen(Dokumen $dokumen)
    {
        //
        return view('web.detail', compact('dokumen'));
    }

    public function download($id)
    {
        //
        $dokumen = Dokumen::find($id);
        $download_path = ( public_path() . '/file/dokumen/' . $dokumen->file );
        return( Response::download( $download_path ) );
    }

}
