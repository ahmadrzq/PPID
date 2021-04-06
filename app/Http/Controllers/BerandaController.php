<?php

namespace App\Http\Controllers;

use App\Berita;
use App\User;
use App\Dokumen;
use App\Kategori;
use App\Jenis;
use App\Dinas;
use Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('web.beranda', compact('berita'));
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
}
