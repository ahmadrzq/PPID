<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $role = Role::all();
        if ($request->has('id', 'name', 'email')) {
            $users = User::where('id', 'LIKE', '%' . $request->id . '%')
                ->where('name', 'LIKE', '%' . $request->name . '%')
                ->where('email', 'LIKE', '%' . $request->email . '%')
                ->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        return view('admin.pengguna.v_pengguna', compact('users', 'role'));
    }

    // public function cari(Request $request)
    // {
    //     $users = User::where('name', 'LIKE', '%'.$request->cari.'%' OR 'email', 'LIKE', '%'.$request->cari.'%')->paginate(10);

    //     return view('admin.pengguna.v_pengguna', compact('users'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.tambah_pengguna');
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
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'pos' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'pos' => $request->pos,
            'jenisKelamin' => $request->jenisKelamin,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'password' => bcrypt(11111),
        ]);

        $role = Role::select('id')->where('id',$request->role)->first();

        $user->roles()->attach($role);

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
        $user = User::findorfail($id);
        return view('admin/pengguna/detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        if(Auth::user()->id == $id){
            return redirect()->route('dashboard.user.index')->with('warning','Tidak bisa menghapus diri sendiri');
        }

        $user = User::find($id);

        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('dashboard.user.index')->with('success','Data telah dihapus');
        }
        
        return redirect()->route('dashboard.user.index')->with('warning','Data ini tidak bisa dihapus');
    }
}
