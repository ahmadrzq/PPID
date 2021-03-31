<?php

namespace App\Http\Controllers\Admin;

use App\User;
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
        if ($request->has('id', 'name', 'email')){
            $users = User::where('id', 'LIKE', '%'.$request->id.'%')
            ->where('name', 'LIKE', '%'.$request->name.'%')
            ->where('email', 'LIKE', '%'.$request->email.'%')
            ->paginate(10);
        }else{
            $users = User::paginate(10);
        }
            
        return view('admin.pengguna.v_pengguna', compact('users'));
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
