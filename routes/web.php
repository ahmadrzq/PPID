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
    return view('admin.informasi.masuk');
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
Route::resource('admin','AdminController');
