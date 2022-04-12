<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\TotalController;

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

Route::get('/login', [LoginController::class, 'index' ])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate' ]);

Route::get('/logout', [LoginController::class, 'logout' ]);

Route::get('/register', [RegistrasiController::class, 'index' ])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store' ]);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::get('/Aset/index', [AsetController::class, 'index' ]);

Route::get('/Aset/Create-Aset', [AsetController::class, 'create' ]);
Route::post('/Aset/simpan_aset', [AsetController::class, 'store' ]);

Route::get('/Aset/Edit-Aset/{id}', [AsetController::class, 'edit' ]);
Route::post('/Aset/update_aset/{id}', [AsetController::class, 'update' ]);

Route::get('/Aset/delete-aset/{id}', [AsetController::class, 'destroy' ]);

Route::get('/Aset/Export-Aset', [AsetController::class, 'asetexport' ]);
Route::post('/Aset/Import-Aset', [AsetController::class, 'asetimport' ]);

Route::get('/Aset/Cetak-Aset', [AsetController::class, 'cetakaset' ]);


Route::get('/Mutasi/index', [MutasiController::class, 'index' ]);

Route::get('/Mutasi/Create-Mutasi', [MutasiController::class, 'create' ]);
Route::post('/Mutasi/simpan_mutasi', [MutasiController::class, 'store' ]);

Route::get('/Mutasi/Edit-Mutasi/{id}', [MutasiController::class, 'edit' ]);
Route::post('/Mutasi/update_mutasi/{id}', [MutasiController::class, 'update' ]);

Route::get('/Mutasi/delete-mutasi/{id}', [MutasiController::class, 'destroy' ]);

Route::get('/Mutasi/Export-Mutasi', [MutasiController::class, 'mutasiexport' ]);
Route::post('/Mutasi/Import-Mutasi', [MutasiController::class, 'mutasiimport' ]);

Route::get('/Mutasi/Cetak-Mutasi', [MutasiController::class, 'cetakmutasi' ]);


Route::get('/Daftar/index', [DaftarController::class, 'index' ]);

Route::get('/Daftar/Create-Daftar', [DaftarController::class, 'create' ]);
Route::post('/Daftar/simpan_daftar', [DaftarController::class, 'store' ]);

Route::get('/Daftar/Edit-Daftar/{id}', [DaftarController::class, 'edit' ]);
Route::post('/Daftar/update_daftar/{id}', [DaftarController::class, 'update' ]);

Route::get('/Daftar/delete-daftar/{id}', [DaftarController::class, 'destroy' ]);

Route::get('/Daftar/Export-Daftar', [DaftarController::class, 'daftarexport' ]);
Route::post('/Daftar/Import-Daftar', [DaftarController::class, 'daftarimport' ]);

Route::get('/Daftar/Cetak-Daftar', [DaftarController::class, 'cetakdaftar' ]);


Route::get('/Peminjaman/index', [PeminjamanController::class, 'index' ]);

Route::get('/Peminjaman/Create-Peminjaman', [PeminjamanController::class, 'create' ]);
Route::post('/Peminjaman/simpan_peminjaman', [PeminjamanController::class, 'store' ]);

Route::get('/Peminjaman/Edit-Peminjaman/{id}', [PeminjamanController::class, 'edit' ]);
Route::post('/Peminjaman/update_peminjaman/{id}', [PeminjamanController::class, 'update' ]);

Route::get('/Peminjaman/delete-peminjaman/{id}', [PeminjamanController::class, 'destroy' ]);

Route::get('/Peminjaman/Export-Peminjaman', [PeminjamanController::class, 'peminjamanexport' ]);
Route::post('/Peminjaman/Import-Peminjaman', [PeminjamanController::class, 'peminjamanimport' ]);

Route::get('/Peminjaman/Cetak-Peminjaman', [PeminjamanController::class, 'cetakpeminjaman' ]);


Route::get('/Rekap/index', [RekapController::class, 'index' ]);

Route::get('/Rekap/Edit-Rekap/{id}', [RekapController::class, 'edit' ]);
Route::post('/Rekap/update_rekap/{id}', [RekapController::class, 'update' ]);

Route::get('/Rekap/delete-rekap/{id}', [RekapController::class, 'destroy' ]);

Route::get('/Rekap/Export-Rekap', [RekapController::class, 'rekapexport' ]);
Route::post('/Rekap/Import-Rekap', [RekapController::class, 'rekapimport' ]);
Route::post('/Rekap/update/{id}',[RekapController::class,'update']);

Route::get('/Rekap/Cetak-Rekap', [RekapController::class, 'cetakrekap' ]);

Route::get('/Total/index', [TotalController::class, 'index' ]);