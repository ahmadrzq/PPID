<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/informasi/meja', function () {
    return view('admin.informasi.meja');
});
Route::get('/dashboard/informasi/pmasuk', function () {
    return view('admin.informasi.pmasuk');
});
Route::get('/dashboard/dokumen/input', function () {
    return view('admin.dokumen.input');
});
Route::resource('admin','AdminController');
