<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::all();
        return view('admin.profil.index', compact('profils'));
    }
    public function indexweb()
    {
        $profils = Profil::all();
        return view('web.profil', compact('profils'));
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
        $profils = Profil::findorfail($id);
        return view('admin.profil.edit', compact('profils'));
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
        $this->validate($request, [
            'profil_ppid' => 'required',
            'visi_misi' => 'required',
            'tupoksi' => 'required',
            'sk' => 'required',
            'sekretariat_PPID' => 'required',
            'maskot' => 'required',
        ]);

        $profils_data = [
            'profil_ppid' => $request->profil_ppid,
            'visi_misi' => $request->visi_misi,
            'tupoksi' => $request->tupoksi,
            'struktur_organisasi' => 'a.jpg',
            'struktur_pemerintahan' => 'a.jpg',
            'sk' => $request->sk,
            'sekretariat_PPID' => $request->sekretariat_PPID,
            'maskot' => $request->maskot,
        ];

        Profil::whereId($id)->update($profils_data);

        return redirect()->route('profil.index')->with('success', 'Data berhasil Diupdate');
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
