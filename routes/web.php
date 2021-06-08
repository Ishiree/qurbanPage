<?php

use App\Http\Controllers\TransaksiController;
use App\Models\HewanQurban;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    $hewans = HewanQurban::all();

    $domba = $hewans->where('id',1)->first();
    $patungan_sapi = $hewans->where('id',2)->first();
    $sapi = $hewans->where('id',3)->first();

    return view('index', compact('hewans','domba','patungan_sapi','sapi'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/transaksi/domba', [\App\Http\Controllers\TransaksiController::class, 'domba'])->name('domba');
Route::get('/transaksi/sapi', [\App\Http\Controllers\TransaksiController::class, 'sapi'])->name('sapi');
Route::get('/transaksi/patungan-sapi', [\App\Http\Controllers\TransaksiController::class, 'patunganSapi'])->name('patungan-sapi');
Route::resource('transaksis', TransaksiController::class);

Route::get('/galeri', function (){
    return view('galeri');
});

// Route::resource('/transaksi', [App\Http\Controllers\TransaksiController::class]);