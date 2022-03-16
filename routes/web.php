<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\EntrepriseController;

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
    return view('welcome');
});


Route::get ('/pays',[PaysController::Class,'index']);
Route::get('/entreprise/create', [EntrepriseController::class,'create'])->name('entreprise.create');
Route::post('/entreprise/store',[EntrepriseController::class,'store'])->name('entreprise.store');
Route::get('/entreprise/{entreprise}',[EntrepriseController::class,'show'])->name('entreprise.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
