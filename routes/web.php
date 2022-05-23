<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\PortofolioController;
use App\Http\Controllers\Frontend\TentangController;

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
//     return view('welcome');
// });
Route::namespace('/')->group(function () {

    Route::get('/', [HomeController::class, 'home']);
    Route::get('tentang', [TentangController::class, 'tentang']);
    Route::get('layanan', [LayananController::class, 'layanan']);
    Route::get('portofolio', [PortofolioController::class, 'portofolio']);
    Route::get('kontak', [KontakController::class, 'kontak']);

});
