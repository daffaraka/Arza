<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KartuStokController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DaftarBarangController;
use App\Http\Controllers\JurnalController;

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

Route::get('/register', [RegisterController::class, 'index' ])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store' ]);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/DaftarBarang/index', [DaftarBarangController::class, 'index' ]);
Route::get('/DaftarBarang/Create-Barang', [DaftarBarangController::class, 'create' ]);
Route::post('/DaftarBarang/simpan_barang', [DaftarBarangController::class, 'store' ]);

Route::get('/DaftarBarang/Edit-Barang/{id}', [DaftarBarangController::class, 'edit' ]);
Route::post('/DaftarBarang/update_barang/{id}', [DaftarBarangController::class, 'update' ]);

Route::get('/DaftarBarang/delete-barang/{id}', [DaftarBarangController::class, 'destroy' ]);

Route::get('/DaftarBarang/Export-Barang', [DaftarBarangController::class, 'barangexport' ]);
Route::post('/DaftarBarang/Import-Barang', [DaftarBarangController::class, 'barangimport' ]);

Route::get('/DaftarBarang/Cetak-Barang', [DaftarBarangController::class, 'cetakbarang' ]);


Route::get('/Penerimaan/index', [PenerimaanController::class, 'index' ]);

Route::get('/Penerimaan/Create-Penerimaan', [PenerimaanController::class, 'create' ]);
Route::post('/Penerimaan/simpan_penerimaan', [PenerimaanController::class, 'store' ]);

Route::get('/Penerimaan/Edit-Penerimaan/{id}', [PenerimaanController::class, 'edit' ]);
Route::post('/Penerimaan/update_penerimaan/{id}', [PenerimaanController::class, 'update' ]);

Route::get('/Penerimaan/delete-penerimaan/{id}', [PenerimaanController::class, 'destroy' ]);

Route::get('/Penerimaan/Export-Penerimaan', [PenerimaanController::class, 'penerimaanexport' ]);
Route::post('/Penerimaan/Import-Penerimaan', [PenerimaanController::class, 'penerimaanimport' ]);

Route::get('/Penerimaan/Cetak-Penerimaan', [PenerimaanController::class, 'cetakpenerimaan' ]);


Route::get('/Pengeluaran/index', [PengeluaranController::class, 'index' ]);

Route::get('/Pengeluaran/Create-Pengeluaran', [PengeluaranController::class, 'create' ]);
Route::post('/Pengeluaran/simpan_pengeluaran', [PengeluaranController::class, 'store' ]);

Route::get('/Pengeluaran/Edit-Pengeluaran/{id}', [PengeluaranController::class, 'edit' ]);
Route::post('/Pengeluaran/update_pengeluaran/{id}', [PengeluaranController::class, 'update' ]);

Route::get('/Pengeluaran/delete-pengeluaran/{id}', [PengeluaranController::class, 'destroy' ]);

Route::get('/Pengeluaran/Export-Pengeluaran', [PengeluaranController::class, 'pengeluaranexport' ]);
Route::post('/Pengeluaran/Import-Pengeluaran', [PengeluaranController::class, 'pengeluaranimport' ]);

Route::get('/Pengeluaran/Cetak-Pengeluaran', [PengeluaranController::class, 'cetakpengeluaran' ]);


Route::get('/KartuStok/index', [KartuStokController::class, 'index' ]);

Route::get('/KartuStok/Create-KartuStok', [KartuStokController::class, 'create' ]);
Route::post('/KartuStok/simpan_kartustok', [KartuStokController::class, 'store' ]);

Route::get('/KartuStok/Edit-KartuStok/{id}', [KartuStokController::class, 'edit' ]);
Route::post('/KartuStok/update_kartustok/{id}', [KartuStokController::class, 'update' ]);

Route::get('/KartuStok/delete-kartustok/{id}', [KartuStokController::class, 'destroy' ]);

Route::get('/KartuStok/Export-KartuStok', [KartuStokController::class, 'kartustokexport' ]);
Route::post('/KartuStok/Import-KartuStok', [KartuStokController::class, 'kartustokimport' ]);

Route::get('/KartuStok/Cetak-KartuStok', [KartuStokController::class, 'cetakkartustok' ]);

Route::get('/Jurnal/index', [JurnalController::class, 'index' ]);
Route::get('/Jurnal/Create-Jurnal', [JurnalController::class, 'create' ]);
Route::post('/Jurnal/simpan_jurnal', [JurnalController::class, 'store' ]);

Route::get('/Jurnal/Edit-Jurnal/{id}', [JurnalController::class, 'edit' ]);
Route::post('/Jurnal/update_jurnal/{id}', [JurnalController::class, 'update' ]);

Route::get('/Jurnal/delete-jurnal/{id}', [JurnalController::class, 'destroy' ]);

Route::get('/Jurnal/Export-Jurnal', [JurnalController::class, 'jurnalexport' ]);
Route::post('/Jurnal/Import-Jurnal', [JurnalController::class, 'jurnalimport' ]);

Route::get('/Jurnal/Cetak-Jurnal', [JurnalController::class, 'cetakjurnal' ]);