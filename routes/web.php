<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumentasiController;

use App\Http\Controllers\WebGISController;
use App\Models\Dokumentasi;

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

Auth::routes(['register' => false]);

Route::get('/', function () {
    // return view('welcome');
    return view('WebGIS.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', 'App\Http\Controllers\WebGISController@index')->name('index');
Route::get('/sk-perhutanan-sosial', 'App\Http\Controllers\WebGISController@SkPs')->name('SkPs');
Route::get('/data-jalan', 'App\Http\Controllers\WebGISController@data')->name('data');
Route::get('/jalan-detail/{id}', 'App\Http\Controllers\WebGISController@jalanDetail')->name('jalanDetail');
Route::get('/contact', 'App\Http\Controllers\WebGISController@contact')->name('contact');
Route::get('/galery', 'App\Http\Controllers\WebGISController@galery')->name('galery');
Route::get('/blog', 'App\Http\Controllers\WebGISController@blog')->name('blog');
// Route::get('/peta', 'App\Http\Controllers\WebGISController@peta')->name('peta');
Route::get('/petaJs', 'App\Http\Controllers\WebGISController@petaJs')->name('petaJs');
Route::get('/peta2', 'App\Http\Controllers\WebGISController@peta2')->name('peta2');
Route::get('/pupr-pontianak', 'App\Http\Controllers\WebGISController@pupr')->name('pupr');
Route::get('/peta3', 'App\Http\Controllers\WebGISController@peta3')->name('peta3');
Route::get('/datatable', 'App\Http\Controllers\WebGISController@datatable')->name('datatable');
Route::get('/chart', 'App\Http\Controllers\WebGISController@chart')->name('chart');
Route::get('/download', 'App\Http\Controllers\WebGISController@download')->name('download');
Route::get('/kondisi-jalan', 'App\Http\Controllers\WebGISController@kondisiJalan')->name('kondisiJalan');
Route::get('/kondisi-jalan-detail/{id}', 'App\Http\Controllers\WebGISController@kondisiJalanDetail')->name('kondisiJalanDetail');
Route::get('/kegiatan-2020', 'App\Http\Controllers\WebGISController@kegiatan2020')->name('kegiatan2020');
Route::get('/kegiatan-2021', 'App\Http\Controllers\WebGISController@kegiatan2021')->name('kegiatan2021');
Route::get('/kegiatan-2020-pembangunan', 'App\Http\Controllers\WebGISController@k2020Pembangunan')->name('k2020Pembangunan');
Route::get('/kegiatan-2020-peningkatan', 'App\Http\Controllers\WebGISController@k2020Peningkatan')->name('k2020Peningkatan');
Route::get('/kegiatan-2020-pemeliharaan', 'App\Http\Controllers\WebGISController@k2020Pemeliharaan')->name('k2020Pemeliharaan');
Route::get('/kegiatan-2021-pembangunan', 'App\Http\Controllers\WebGISController@k2021Pembangunan')->name('k2021Pembangunan');
Route::get('/kegiatan-2021-rekonstruksi', 'App\Http\Controllers\WebGISController@k2021Rekonstruksi')->name('k2021Rekonstruksi');
Route::get('/kegiatan-2021-berkala', 'App\Http\Controllers\WebGISController@k2021Berkala')->name('k2021Berkala');
Route::get('/kegiatan-2021-trotoar', 'App\Http\Controllers\WebGISController@k2021Trotoar')->name('k2021Trotoar');

// Admin routes
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::get('/dashboard2', 'App\Http\Controllers\DashboardController@index2')->name('dashboard2');
Route::get('/jalan-kota-pontianak', 'App\Http\Controllers\DashboardController@jalanKota')->name('jalanKota');
Route::get('/edit-jalan/{id}', 'App\Http\Controllers\DashboardController@editJalan')->name('editJalan');
Route::put('/update-jalan/{id}', 'App\Http\Controllers\DashboardController@updateJalan')->name('updateJalan');
Route::get('/add-jalan', 'App\Http\Controllers\DashboardController@tambahJalan')->name('tambahJalan');
Route::get('/jalan-keseluruhan', 'App\Http\Controllers\WebGISController@jalanKeseluruhan')->name('jalanKeseluruhan');

Route::resource('jalan', 'App\Http\Controllers\JalanController');
Route::resource('dokumentasi', 'App\Http\Controllers\DokumentasiController');
Route::resource('peta', 'App\Http\Controllers\PetaController');
Route::resource('parent-jalan', 'App\Http\Controllers\ParentJalanController');
Route::resource('child-jalan', 'App\Http\Controllers\ChildJalanController');

Route::post('simpan-jalan', 'App\Http\Controllers\JalanController@store')->name('simpanJalan');

// Route::get('/tes', 'App\Http\Controllers\WebGISController@tes')->name('tes');
Route::get('/tes', [WebGISController::class, 'coba']);



// Route::get('/show-pdf/{id}', function ($id) {
//     $file = Dokumentasi::find($id);
//     return response()->file("assets/img/dokumentasi/" . $file);
// })->name('show-pdf');
// Route::resource('jalan', 'JalanController');
// End Admin route



// Route untuk bangunan
// Route::get('/data-bangunan-gedung2', 'App\Http\Controllers\BangunanGedungController@BangunanGedung')->name('BangunanGedung2');
Route::get('/data-bangunan-gedung', 'App\Http\Controllers\WebGISBangunanController@BangunanGedung')->name('BangunanGedung');
Route::get('/data-bangunan-gedung-sub/{id}', 'App\Http\Controllers\WebGISBangunanController@BangunanGedung2')->name('BangunanGedung2');
Route::get('/data-bangunan-gedung-detail/{id}', 'App\Http\Controllers\WebGISBangunanController@DetailBangunanLengkap')->name('DetailBangunanLengkap');
Route::get('/data-kerusakan-gedung', 'App\Http\Controllers\KerusakanGedungController@KerusakanGedung')->name('KerusakanGedung');
Route::get('/download-bangunan', 'App\Http\Controllers\WebGISBangunanController@downloadBangunan')->name('downloadBangunan');

// Route::get('/kondisi-jalan', 'App\Http\Controllers\WebGISController@kondisiJalan')->name('kondisiJalan');
// Route::get('/kondisi-jalan-detail/{id}', 'App\Http\Controllers\WebGISController@kondisiJalanDetail')->name('kondisiJalanDetail');
// End route untuk bangunan
