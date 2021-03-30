<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::paginate(10);
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'author' => 'required',
            'isi' => 'required',
            'image' => 'required',
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName(); 

        $berita = Berita::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'isi' => $request->isi,
            'image' => 'public/uploads/berita/'.$new_image

            ]);

            $image->move('public/uploads/berita/', $new_image);
            return redirect()->back()->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findorfail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findorfail($id);
        return view('admin.berita.edit', compact('berita'));
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
        $this->validate($request,[
            'judul' => 'required',
            'author' => 'required',
            'isi' => 'required',
        ]);

        $berita_data = [
            'judul' =>$request->judul,
            'author' =>$request->author,
            'author' =>$request->author,
        ];

        Berita::whereId($id)->update($berita_data);

        return redirect()->route('berita.index')->with('success','Data berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findorfail($id);
        $berita->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
