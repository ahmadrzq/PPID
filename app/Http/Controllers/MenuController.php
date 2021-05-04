<?php

namespace App\Http\Controllers;

use App\Dinas;
use Illuminate\Http\Request;
use App\User;
use App\Permohonan;
use App\Provinsi;
use Illuminate\Support\Facades\Auth;
use Response;


class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.pengguna.dashboard', compact('user'));
    }

    public function ajukan()
    {
        $dinas = Dinas::all();
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.pengguna.ajukan', compact('user', 'dinas'));
    }


    public function tambahPermohonan(Request $request)
    {

        $user = User::all();
        $permohonan = Permohonan::create([
            'nama' => Auth::user()->name,
            'user_id' => Auth::user()->id,
            'judul' => $request->judul,
            'dinas_id' => $request->dinas,
            'kode' => mt_rand(10000, 99999),
            'nik' => Auth::user()->nik,
            'jenisKelamin' => Auth::user()->jenisKelamin,
            'tempatLahir' => Auth::user()->tempatLahir,
            'tanggalLahir' => Auth::user()->tanggalLahir,
            'alamat' => Auth::user()->alamat,
            'tujuanInformasi' => $request->tujuanInformasi,
            'kota' => Auth::user()->kota,
            'pos' => Auth::user()->pos,
            'provinsi_id' => 1,
            'telepon' => Auth::user()->telepon,
        ]);

        \Mail::to('182410102053@students.unej.ac.id')->send(new \App\Mail\PermohonanMail($request->judul, Auth::user()->name));

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function permohonan()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $permohonan = Permohonan::all();
        $mohon = Permohonan::where('user_id', Auth::user()->id)->get();
        return view('web.pengguna.permohonan', compact('user', 'permohonan', 'mohon'));
    }
    public function keberatan()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.pengguna.keberatan', compact('user'));
    }
    public function dokumen()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.pengguna.dokumen', compact('user'));
    }

    public function download($id)
    {
        //
        $permohonan = Permohonan::find($id);
        $download_path = (public_path() . '/file/dokumen/' . $permohonan->file);
        return (Response::download($download_path));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function showProfil()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.pengguna.profil', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        if ($request->input('password')) {
            $user_data = [
                'password' => bcrypt($request->password)
            ];
        }

        $user = User::find($id);
        $user->update($user_data);

        return redirect()->route('pengguna.profil');
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
    public function destroy($id)
    {
        //
    }
}
