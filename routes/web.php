<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnggotaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function() {

    // //page anggota
    // Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota');

    //latihan anggota
    
    Route::resource('/anggota',AnggotaController::class)->only([
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ]);

});