<?php

namespace App\Http\Controllers;

use App\Berita;
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
}
