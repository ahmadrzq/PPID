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
Route::get('/dashboard/informasi/masuk', function () {
    return view('admin.informasi.pmasuk.masuk');
});
Route::get('/dashboard/informasi/detail', function () {
    return view('admin.informasi.pmasuk.detail');
});
Route::get('/dashboard/informasi/proses-terima', function () {
    return view('admin.informasi.pmasuk.proses_terima');
});
Route::get('/dashboard/informasi/diterima', function () {
    return view('admin.informasi.pmasuk.diterima');
});
Route::get('/dashboard/informasi/proses-tolak', function () {
    return view('admin.informasi.pmasuk.proses_tolak');
});
Route::get('/dashboard/informasi/ditolak', function () {
    return view('admin.informasi.pmasuk.ditolak');
});
Route::get('/dashboard/informasi/view-proses', function () {
    return view('admin.informasi.v_proses');
});
Route::get('/dashboard/informasi/view-selesai', function () {
    return view('admin.informasi.v_selesai');
});
Route::get('/dashboard/informasi/view-ditolak', function () {
    return view('admin.informasi.v_ditolak');
});
Route::get('/dashboard/informasi/view-keberatan', function () {
    return view('admin.informasi.v_keberatan');
});
Route::get('/dashboard/informasi/view-permohonan', function () {
    return view('admin.informasi.v_permohonan');
});
Route::get('/dashboard/informasi/view-pemohon', function () {
    return view('admin.informasi.v_pemohon');
});
Route::get('/dashboard/dokumen/input', function () {
    return view('admin.dokumen.input');
});
Route::get('/dashboard/dokumen/view', function () {
    return view('admin.dokumen.view');
});
Route::get('/dashboard/dokumen/draft', function () {
    return view('admin.dokumen.draft');
});
Route::get('/dashboard/dokumen/publish', function () {
    return view('admin.dokumen.publish');
});
Route::get('/dashboard/pengguna/view', function () {
    return view('admin.pengguna.v_pengguna');
});
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
Route::get('/profil', function () {
    return view('web.profil');
});
Route::get('/login', function () {
    return view('web.login');
});
Route::get('/register', function () {
    return view('web.register');
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
Route::get('/dokumen', function () {
    return view('web.dokumen');
});
Route::get('/berita/isiberita', function () {
    return view('web.berita');
});
Route::resource('/beranda','BerandaController');
Route::resource('/berita','BeritaController');
