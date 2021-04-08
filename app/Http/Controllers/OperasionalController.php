<?php

namespace App\Http\Controllers;

use App\Dinas;
use Illuminate\Http\Request;

class OperasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinas = Dinas::paginate(20);
        return view('admin.data.dinas.index', compact('dinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data.dinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);

        $dinas = Dinas::create([
            'nama' => $request->nama,

        ]);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operasional  $operasional
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operasional  $operasional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dinas = Dinas::findorfail($id);
        return view('admin.data.dinas.edit', compact('dinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operasional  $operasional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);

        $dinas_data = [
            'nama' => $request->nama
        ];

        Dinas::whereId($id)->update($dinas_data);

        return redirect()->route('dinas.index')->with('success','Data berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operasional  $operasional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinas = Dinas::findorfail($id);
        $dinas->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
