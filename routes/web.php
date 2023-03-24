<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route ini akan mengarahkan ke halaman utama
// url: yang akhiranya adalah / akan diarahkan ke halaman utama
Route::get('/', [PagesController::class, 'halamanUtama']);



