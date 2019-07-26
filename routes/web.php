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

// Route::get('/', function () {
// 	return view('welcome');
// });

// Route::get('/', function () {
// 	return view('/home/index');
// });

/* Ajax Ngambil data NIK */
Route::get(
	'/ngambil/nik/{id}', 'FrontendController@ngambilNIK')->name('nik.ngambil');

Route::get('/', 'FrontendController@index')->name('index');

Route::get('/profil','ProfilController@profil');
Route::get('/skema','SkemaController@skema');

Route::get('/skemadaftar','SkemaDaftarController@index');
Route::get('/skemadaftar/{id}/show','SkemaDaftarController@show')->name('show');

Route::get('/galeri','GaleriController@galeri');
Route::get('/contact','ContactController@contact');

Route::get('/jadwal','JadwalController@index');

Route::get('/formulir/{id}','FormulirController@formulir')->name('formulir.pendaftaran');
Route::post('/formulir','FormulirController@store')->name('store');

// Route Admin
Route::group(['middleware' => ['auth'],['verified']],function(){

// Admin Beranda
	Route::get('/admin/beranda','admin\BerandaController@beranda');
	Route::post('/admin/tambah','admin\BerandaController@tambah');
	Route::get('/admin/beranda/{id}/edit','admin\BerandaController@edit');
	Route::post('/admin/beranda/{id}/update','admin\BerandaController@update');
	Route::get('/admin/beranda/{id}/delete','admin\BerandaController@delete');
	// Route::post('/admin/beranda','admin\BerandaController@index');

// Admin Galleri
	Route::get('/admin/galleri','admin\GalleriController@index');
	Route::post('/admin/galleri','admin\GalleriController@upload');
	Route::delete('/admin/galleri','admin\GalleriController@index');

// Admin SkemaPendaftaran
	Route::get('/admin/skemapendaftaran','admin\SkemaPendaftaranController@index');
	Route::post('/admin/skemapendaftaran/tambah','admin\SkemaPendaftaranController@tambah');
	Route::get('/admin/skemapendaftaran/{id}/edit','admin\SkemaPendaftaranController@edit');
	Route::post('/admin/skemapendaftaran/{id}/update','admin\SkemaPendaftaranController@update');
	Route::get('/admin/skemapendaftaran/{id}/delete','admin\SkemaPendaftaranController@delete');

// Admin Kontak
	Route::get('/admin/kontak','admin\KontakController@kontak');
	Route::post('/admin/buat','admin\KontakController@buat');
	Route::get('/admin/kontak/{id}/edit','admin\KontakController@edit');
	Route::post('/admin/kontak/{id}/update','admin\KontakController@update');
	Route::get('/admin/kontak/{id}/delete','admin\KontakController@delete');

// Admin Formulir
	Route::get('/admin/formuliruser','admin\FormulirUserController@index');
	Route::get('/admin/formuliruser/{id}','admin\FormulirUserController@show')->name('show');
	
// Admin Data Pembayaran
	Route::get('/admin/datapembayaran','admin\DataPembayaranController@index');
	Route::get('/admin/datapembayaran/{id}/show','admin\DataPembayaranController@show')->name('show.datapembayaran');

// Admin Sertifikasi
	Route::get('/admin/sertifikasi','admin\SertifikasiController@index');
	Route::post('/admin/sertifikasi/{id}/update','admin\SertifikasiController@update')->name('update.sertifikasi');

// Admin Jadwal Pendaftaran
	Route::get('/admin/jadwalpendaftaran','admin\JadwalPendaftaranController@index');
	Route::post('/admin/jadwalpendaftaran','admin\JadwalPendaftaranController@store')->name('jadwal.store');
	Route::get('/admin/jadwalpendaftaran/{id}/edit','admin\JadwalPendaftaranController@edit');
	Route::post('/admin/jadwalpendaftaran/{id}/update','admin\JadwalPendaftaranController@update');
	Route::get('/admin/jadwalpendaftaran/{id}/delete','admin\JadwalPendaftaranController@delete');

});


// Route User
Route::middleware('auth')->group(function(){

	// Beranda
	Route::get('/user/beranda','user\BerandaUserController@index');

	// Profil
	Route::get('/user/profil','user\UserProfilController@index');
	Route::get('/user/profil/{id}/edit','user\UserProfilController@edit');
	Route::post('/user/profil/{id}/update','user\UserProfilController@update');

	// Jadwal Tuk
	Route::get('/user/tuk','user\TukController@index');
	Route::post('/user/tuk','user\TukController@store')->name('store.user');
	// Route::get('/user/tuk/{id}/show', 'user\TukController@show')->name('show.tuk');

	// Pembayaran
	Route::get('/user/pembayaran','user\PembayaranController@pembayaran');
	Route::post('/user/stripe', 'user\PembayaranController@stripe')->name('user.stripe');
	// Route::post('/user/buat','user\PembayaranController@buat');

	// Tracking
	Route::get('/user/tracking','user\TrackingController@index');
	// Route::get('/user/tracking/{id}/show','user\TrackingController@show');
	
	// Pemeliharaan
	Route::get('/user/pemeliharaan','user\PemeliharaanController@index');

	// Perpanjangan
	Route::get('/user/perpanjangan','user\PerpanjanganController@index');

	// Report
	Route::get('/user/report','user\ReportController@index');

});


// Route::get('/admin', function () {
//     return view('layouts/master');
// });

// fake gmail mailtrip.io
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
	Route::get('/post', 'PostController@index')->name('post.index');
	Route::get('/create', 'PostController@create')->name('post.create');
	Route::post('/create', 'PostController@store')->name('post.store');
	Route::get('/post/{post}', 'PostController@show')->name('post.show');
	Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
	Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
	Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
	Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');
});
