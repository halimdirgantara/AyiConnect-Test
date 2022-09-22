<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguangeController;

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
})->name('welcome');
Route::get('/register/lang', [LanguangeController::class, 'change'])->name('changeLang');



Route::post('checkout', function () {
    auth()->logout();
    Session()->flush();
    return redirect()->route('welcome');
})->name('checkout');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::Class, 'index'])->name('dashboard');
});
