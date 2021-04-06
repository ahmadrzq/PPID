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

Route::get('dashboard', 'AdminController@index')->middleware(['auth','auth.admin']);

Route::get('/dashboard/informasi/meja', 'PermohonanController@meja')->name('tambah-info');
Route::post('/dashboard/informasi/meja', 'PermohonanController@store')->name('input-info');

Route::get('/dashboard/informasi/masuk', 'PermohonanController@masuk');

Route::get('/dashboard/informasi/detail/{permohonan}', 'PermohonanController@show')->name('detail-info');

Route::get('/dashboard/informasi/proses-terima/status/{id}', 'PermohonanController@terima')->name('terima-info');
Route::get('/dashboard/informasi/proses/status/{id}', 'PermohonanController@proses')->name('proses-info');
Route::get('/dashboard/informasi/detail', function () {
    return view('admin.informasi.pmasuk.detail');
});
Route::get('/dashboard/informasi/proses-terima', function () {
    return view('admin.informasi.pmasuk.proses_terima');
});
Route::get('/dashboard/informasi/diterima', function () {
    return view('admin.informasi.pmasuk.diterima');
});

Route::get('/dashboard/informasi/proses-tolak/status/{id}', 'PermohonanController@tolak')->name('tolak-info');
Route::get('/dashboard/informasi/ditolak', function () {
    return view('admin.informasi.pmasuk.ditolak');
});

Route::get('/dashboard/informasi/view-proses', 'PermohonanController@diproses');

Route::get('/dashboard/informasi/view-selesai', 'PermohonanController@selesai');

Route::get('/dashboard/informasi/view-ditolak', 'PermohonanController@ditolak');

Route::get('/dashboard/informasi/view-permohonan', 'PermohonanController@semuaPermohonan');

Route::get('/dashboard/informasi/view-pemohon', 'PermohonanController@pemohon');

Route::get('/dashboard/dokumen/input', 'DokumenController@input')->name('tambah-dokumen');
Route::post('/dashboard/dokumen/input', 'DokumenController@store')->name('input-dokumen');
Route::get('/dashboard/dokumen/edit/{id}', 'DokumenController@edit')->name('edit-dokumen');
Route::post('/dashboard/dokumen/update/{id}', 'DokumenController@update')->name('update-dokumen');
Route::get('/dashboard/dokumen/hapus/{id}', 'DokumenController@hapus')->name('hapus-dokumen');
Route::get('/dashboard/dokumen/download/{id}', 'DokumenController@download')->name('download-dokumen');
Route::get('/dashboard/dokumen/view', 'DokumenController@view');
Route::get('/dashboard/dokumen/draft', 'DokumenController@draft');
Route::get('/dashboard/dokumen/publish', 'DokumenController@publish');
Route::get('/dashboard/pengguna/view', 'Admin\UserController@index');

Route::get('/dashboard/pengguna/tambah-pengguna', function () {
    return view('admin.pengguna.tambah_pengguna');
});
Route::get('/dashboard/pengguna/edit-pengguna', function () {
    return view('admin.pengguna.edit_pengguna');
});
Route::get('/dashboard/pengguna-publik/view', function () {
    return view('admin.pengguna-publik.v_publik');
});
Route::get('/dashboard/pengguna-publik/riwayat', function () {
    return view('admin.pengguna-publik.riwayat');
});

Route::get('/registered', function () {
    return view('web.registered');
});
Route::get('/pengguna/dashboard', function () {
    return view('web.pengguna.dashboard');
});
Route::get('/pengguna/ajukan', function () {
    return view('web.pengguna.ajukan');
});
Route::get('/pengguna/permohonan', function () {
    return view('web.pengguna.permohonan');
});
Route::get('/pengguna/keberatan', function () {
    return view('web.pengguna.keberatan');
});
Route::get('/pengguna/dokumen', function () {
    return view('web.pengguna.dokumen');
});
Route::get('/pengguna/profil', function () {
    return view('web.pengguna.profil');
});
// Route::get('/dokumen', function () {
//     return view('web.dokumen');
// });
Route::get('/dokumen','BerandaController@cariDok');
Route::get('/berita/isiberita', function () {
    return view('web.berita');
});
Route::resource('/beranda','BerandaController');
Route::resource('/berita','BeritaController');
Route::resource('/profil','ProfilController');
Route::get('/profil-ppid','ProfilController@indexweb');
Route::get('/menu','MenuController@index')->name('menu.index');
Route::get('/menu/ajukan','MenuController@ajukan')->name('menu.ajukan');
Route::post('/menu/ajukan','MenuController@tambahPengajuan')->name('menu.store');
Route::get('/menu/keberatan','MenuController@keberatan')->name('menu.keberatan');
Route::get('/menu/dokumen','MenuController@dokumen')->name('menu.dokumen');
Route::get('/menu/permohonan','MenuController@permohonan')->name('menu.permohonan');
Route::get('/pengguna/profil', 'MenuController@showProfil')->name('pengguna.profil');

Route::namespace('Admin')->prefix('dashboard')->middleware('auth','auth.admin')->name('dashboard.')->group(function(){
    Route::resource('/user','UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
