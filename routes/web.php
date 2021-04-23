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
Route::middleware(['auth', 'auth.all'])->group(function () {
    Route::get('dashboard', 'AdminController@index');
    Route::get('/dashboard/dokumen/input', 'DokumenController@input')->name('tambah-dokumen');
    Route::post('/dashboard/dokumen/input', 'DokumenController@store')->name('input-dokumen');
    Route::get('/dashboard/dokumen/edit/{id}', 'DokumenController@edit')->name('edit-dokumen');
    Route::post('/dashboard/dokumen/update/{id}', 'DokumenController@update')->name('update-dokumen');
    Route::get('/dashboard/dokumen/hapus/{id}', 'DokumenController@hapus')->name('hapus-dokumen');
    Route::get('/dashboard/dokumen/download/{id}', 'DokumenController@download')->name('download-dokumen');
    Route::get('/dashboard/dokumen/view', 'DokumenController@view');
    Route::get('/dashboard/dokumen/draft', 'DokumenController@draft');
    Route::get('/dashboard/dokumen/publish', 'DokumenController@publish');
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

    Route::post('/dashboard/informasi/pmasuk/diterima/{id}', 'PermohonanController@diterima')->name('diterima');
    Route::post('/dashboard/informasi/pmasuk/ditolak/{id}', 'PermohonanController@ditolak2')->name('ditolak');
    Route::get('/dashboard/informasi/proses-tolak/status/{id}', 'PermohonanController@tolak')->name('tolak-info');
    Route::get('/dashboard/informasi/ditolak', function () {
        return view('admin.informasi.pmasuk.ditolak');
    });
    Route::get('/dashboard/informasi/view-proses', 'PermohonanController@diproses');
    Route::get('/dashboard/informasi/view-selesai', 'PermohonanController@selesai');
    Route::get('/dashboard/informasi/view-ditolak', 'PermohonanController@ditolak');
    Route::get('/dashboard/informasi/view-permohonan', 'PermohonanController@semuaPermohonan');
    Route::get('/dashboard/informasi/view-pemohon', 'PermohonanController@pemohon');
    Route::get('/profil-user', 'Admin\UserController@viewProfil')->name('profil.user');
    Route::post('/profil-user/{id}', 'Admin\UserController@updatePassword')->name('profil.user.update');

});

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/dashboard/pengguna/edit-pengguna', function () {
        return view('admin.pengguna.edit_pengguna');
    });
    Route::get('/dashboard/pengguna-publik/view', function () {
        return view('admin.pengguna-publik.v_publik');
    });
    Route::get('/dashboard/pengguna-publik/riwayat', function () {
        return view('admin.pengguna-publik.riwayat');
    });
    Route::resource('/berita', 'BeritaController');
    Route::resource('/profil', 'ProfilController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/dinas', 'OperasionalController');
    Route::namespace('Admin')->prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('/user', 'UserController');
    });
    Route::get('/informasi/cetak_pdf', 'PermohonanController@laporan');
    Route::get('/user/cetak_pdf', 'Admin\UserController@cetak_pdf');
    Route::get('/diterima/cetak_pdf/{permohonan}', 'PermohonanController@cetak_pdf_diterima')->name('diterima.pdf');
    Route::get('/ditolak/cetak_pdf/{permohonan}', 'PermohonanController@cetak_pdf_ditolak')->name('ditolak.pdf');
    Route::get('/permohonan/cetak_pdf/{permohonan}', 'PermohonanController@cetak_pdf_permohonan')->name('permohonan.pdf');
});

Route::get('/akses-error','AdminController@aksesError');

Route::get('/registered', function () {
    return view('web.registered');
});

// Route::get('/dokumen', function () {
//     return view('web.dokumen');
// });
Route::resource('/beranda', 'BerandaController');
Route::get('/berita/isiberita/{id}', 'BerandaController@show')->name('berita.isi');
Route::get('/berita-list', 'BeritaController@beritaList')->name('berita.list');
// Route::get('/detail', function () {
//     return view('web.detail');
// });
Route::get('/dokumen/detail/{dokumen}', 'BerandaController@detailDokumen')->name('detail-dok');
Route::get('/dokumen', 'BerandaController@cariDok')->name('dokumen-view');
Route::get('/dokumen/download/{id}', 'BerandaController@download')->name('download-dok');
Route::get('/dashboard/informasi/download/{id}', 'MenuController@download')->name('download-dokumen-informasi');
Route::get('/profil-ppid', 'ProfilController@indexweb');

Route::middleware(['auth','auth.user','verified'])->group(function () {
    Route::get('/menu', 'MenuController@index')->name('menu.index');
    Route::get('/menu/ajukan', 'MenuController@ajukan')->name('menu.ajukan');
    Route::post('/menu/ajukan', 'MenuController@tambahPermohonan')->name('menu.store');
    Route::get('/menu/keberatan', 'MenuController@keberatan')->name('menu.keberatan');
    Route::get('/menu/dokumen', 'MenuController@dokumen')->name('menu.dokumen');
    Route::get('/menu/permohonan', 'MenuController@permohonan')->name('menu.permohonan');
    Route::get('/pengguna/profil', 'MenuController@showProfil')->name('pengguna.profil');
    Route::post('/pengguna/profil/{id}', 'MenuController@updatePassword')->name('pengguna.profil.update');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
