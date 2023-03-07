<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController as SC;
use App\Http\Controllers\MasterController as MC;
use App\Http\Controllers\ServiceController as SE;
use App\Http\Controllers\OrderController as OC;

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
Route::prefix('salon')->name('salon-')->group(function () {
    Route::get('/', [SC::class, 'index'] )->name('index')->middleware('roles:A');
    Route::get('/list', [SC::class, 'index2'] )->name('index2')->middleware('roles:A|C');
    Route::get('/create', [SC::class, 'create'] )->name('create')->middleware('roles:A');
    Route::post('/create', [SC::class, 'store'] )->name('store')->middleware('roles:A');
    Route::get('/edit/{salon}', [SC::class, 'edit'] )->name('edit')->middleware('roles:A');
    Route::get('/show/{salon}', [SC::class, 'show'] )->name('show')->middleware('roles:A|C');
    Route::put('/edit/{salon}', [SC::class, 'update'] )->name('update')->middleware('roles:A');
    Route::delete('/delete/{salon}', [SC::class, 'destroy'])->name('delete')->middleware('roles:A');
});
Route::prefix('master')->name('master-')->group(function () {
    Route::get('/', [MC::class, 'index'] )->name('index')->middleware('roles:A');
    Route::get('/list', [MC::class, 'index2'] )->name('index2')->middleware('roles:A|C');
    Route::get('/create', [MC::class, 'create'] )->name('create')->middleware('roles:A');
    Route::post('/create', [MC::class, 'store'] )->name('store')->middleware('roles:A');
    Route::get('/edit/{master}', [MC::class, 'edit'] )->name('edit')->middleware('roles:A');
    Route::put('/edit/{master}', [MC::class, 'update'] )->name('update')->middleware('roles:A');
    Route::delete('/delete/{master}', [MC::class, 'destroy'])->name('delete')->middleware('roles:A');
});
Route::prefix('service')->name('service-')->group(function () {
    Route::get('/', [SE::class, 'index'] )->name('index')->middleware('roles:A');
    Route::get('/list', [SE::class, 'index2'] )->name('index2')->middleware('roles:A|C');
    Route::get('/create', [SE::class, 'create'] )->name('create')->middleware('roles:A');
    Route::post('/create', [SE::class, 'store'] )->name('store')->middleware('roles:A');
    Route::get('/edit/{service}', [SE::class, 'edit'] )->name('edit')->middleware('roles:A');
    Route::put('/edit/{service}', [SE::class, 'update'] )->name('update')->middleware('roles:A');
    Route::delete('/delete/{service}', [SE::class, 'destroy'])->name('delete')->middleware('roles:A');
});
Route::prefix('order')->name('order-')->group(function () {
    Route::get('/', [OC::class, 'index'] )->name('index')->middleware('roles:A');
    Route::get('/list', [OC::class, 'index2'] )->name('index2')->middleware('roles:A|C');
    Route::get('/create', [OC::class, 'create'] )->name('create')->middleware('roles:A|C');
    Route::post('/create', [OC::class, 'store'] )->name('store')->middleware('roles:A|C');
    Route::get('/edit/{order}', [OC::class, 'edit'] )->name('edit')->middleware('roles:A');
    Route::put('/edit/{order}', [OC::class, 'update'] )->name('update')->middleware('roles:A');
    Route::delete('/delete/{order}', [OC::class, 'destroy'])->name('delete')->middleware('roles:A');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
