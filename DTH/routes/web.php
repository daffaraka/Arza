<?php

use App\Http\Controllers\DTHController;
use App\Http\Controllers\TriwulanController;
use App\Http\Controllers\NPWPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;


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

Route::get('/regis', [RegisController::class, 'index' ])->middleware('guest');
Route::post('/regis', [RegisController::class, 'store' ]);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});


Route::get('/DTH/index', [DTHController::class, 'index' ]);

Route::get('/DTH/Create-DTH', [DTHController::class, 'create' ]);
Route::post('/DTH/simpan_dth', [DTHController::class, 'store' ]);

Route::get('/DTH/Edit-DTH/{id}', [DTHController::class, 'edit' ]);
Route::post('/DTH/update_dth/{id}', [DTHController::class, 'update' ]);
Route::get('/DTH/delete-dth/{id}', [DTHController::class, 'destroy' ]);
Route::get('/DTH/Export-DTH', [DTHController::class, 'dthexport' ]);
Route::post('/DTH/Import-DTH', [DTHController::class, 'dthimport' ]);
Route::get('/DTH/Cetak-DTH', [DTHController::class, 'cetakdth' ]);
Route::get('/DTH/search', [DTHController::class,'search'])->name('search');


Route::get('/NPWP',[NPWPController::class, 'index' ])->name('NPWP.index');
Route::get('/NPWP/create',[NPWPController::class, 'index' ])->name('NPWP.create');
Route::get('/NPWP/{id}/edot',[NPWPController::class, 'edit' ])->name('NPWP.edit');
Route::post('/NPWP/Import-NPWP', [NPWPController::class, 'npwpimport' ])->name('NPWP.import');
Route::get('/NPWP/delete/{id}',[NPWPController::class, 'destroy' ])->name('NPWP.delete');
Route::post('/NPWP/update/{id}', [NPWPController::class, 'update' ])->name('NPWP.update');
Route::get('/NPWP/Export-NPWP', [NPWPController::class, 'exportNPWP'])->name('NPWP.export');
Route::get('/NPWP/Cetak-NPWP', [NPWPController::class, 'cetaknpwp'])->name('NPWP.cetak');


Route::get('Triwulan/index',[TriwulanController::class,'index'])->name('Triwulan.index');
