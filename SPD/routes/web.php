<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GUSPDController;
use App\Http\Controllers\GUSPJController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SPDTriController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index' ]);

Route::get('/logout', [LoginController::class, 'logout' ]);

Route::get('/register', [RegisterController::class, 'index' ]);
Route::post('/register', [RegisterController::class, 'store' ]);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::get('/SPD/index', [GUSPDController::class, 'index' ]);

Route::get('/SPD/Create-SPD', [GUSPDController::class, 'create' ]);
Route::post('/SPD/simpan_spd', [GUSPDController::class, 'store' ]);

Route::get('/SPD/Edit-SPD/{id}', [GUSPDController::class, 'edit' ]);
Route::post('/SPD/update_spd/{id}', [GUSPDController::class, 'update' ]);

Route::get('/SPD/delete-spd/{id}', [GUSPDController::class, 'destroy' ]);

Route::get('/SPD/Export-SPD', [GUSPDController::class, 'spdexport' ]);
Route::post('/SPD/Import-SPD', [GUSPDController::class, 'spdimport' ]);

Route::get('/SPD/Cetak-SPD', [GUSPDController::class, 'cetakspd' ]);


Route::get('/SPJ/index', [GUSPJController::class, 'index' ]);

Route::get('/SPJ/Create-SPJ', [GUSPJController::class, 'create' ]);
Route::post('/SPJ/simpan_spj', [GUSPJController::class, 'store' ]);

Route::get('/SPJ/Edit-SPJ/{id}', [GUSPJController::class, 'edit' ]);
Route::post('/SPJ/update_spj/{id}', [GUSPJController::class, 'update' ]);

Route::get('/SPJ/delete-spj/{id}', [GUSPJController::class, 'destroy' ]);

Route::get('/SPJ/Export-SPJ', [GUSPJController::class, 'spjexport' ]);
Route::post('/SPJ/Import-SPJ', [GUSPJController::class, 'spjimport' ]);

Route::get('/SPJ/Cetak-SPJ', [GUSPJController::class, 'cetakspj' ]);


Route::get('/Target/index', [TargetController::class, 'index' ]);

Route::get('/Target/Create-Target', [TargetController::class, 'create' ]);
Route::post('/Target/simpan_target', [TargetController::class, 'store' ]);

Route::get('/Target/Edit-Target/{id}', [TargetController::class, 'edit' ]);
Route::post('/Target/update_target/{id}', [TargetController::class, 'update' ]);

Route::get('/Target/delete-target/{id}', [TargetController::class, 'destroy' ]);

Route::get('/Target/Export-Target', [TargetController::class, 'targetexport' ]);
Route::post('/Target/Import-Target', [TargetController::class, 'targetimport' ]);

Route::get('/Target/Cetak-Target', [TargetController::class, 'cetaktarget' ]);


Route::get('/SPD-Triwulan/index', [SPDTriController::class, 'index' ]);

Route::get('/SPD-Triwulan/Edit-Triwulan/{id}', [SPDTriController::class, 'edit' ]);
Route::post('/SPD-Triwulan/update_triwulan/{id}', [SPDTriController::class, 'update' ]);

Route::get('/SPD-Triwulan/delete-triwulan/{id}', [SPDTriController::class, 'destroy' ]);

Route::get('/SPD-Triwulan/Export-Triwulan', [SPDTriController::class, 'spdtriexport' ]);
Route::post('/SPD-Triwulan/Import-Triwulan', [SPDTriController::class, 'spdtriimport' ]);

Route::get('/SPD-Triwulan/Cetak-Triwulan', [SPDTriController::class, 'cetakspdtriwulan' ]);


Route::get('/Daftar/index', [DaftarController::class, 'index' ]);

Route::get('/Daftar/Edit-Daftar/{id}', [DaftarController::class, 'edit' ]);
Route::post('/Daftar/update_daftar/{id}', [DaftarController::class, 'update' ]);

Route::get('/Daftar/delete-daftar/{id}', [DaftarController::class, 'destroy' ]);

Route::get('/Daftar/Export-Daftar', [DaftarController::class, 'daftarexport' ]);
Route::post('/Daftar/Import-Daftar', [DaftarController::class, 'daftarimport' ]);

Route::get('/Daftar/Cetak-Daftar', [DaftarController::class, 'cetakdaftar' ]);