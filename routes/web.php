<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguangeController;
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

// Route::pattern('domain', 'ayiconnect-test.test');
//
Route::group(['domain' => 'ayiconnect-test.test'], function () {

    Route::get('/', function () {
        return redirect()->route('register');
    })->name('welcome');
    Route::get('/register/lang', [LanguangeController::class, 'change'])->name('changeLang');

    Route::get('checkout', function () {
        auth()->logout();
        Session()->flush();
        return redirect()->route('register');
    })->name('checkout');
});

Route::group(array(['domain' => '{subdomain}.ayiconnect-test.test']), function () {
    // Place your routes in here, like for example
    Route::group(['middleware' => ['subdomainexist']], function () {

        Route::get('/', [HomeController::class, 'index'])->name('home.index');

        Route::post('checkout', function () {
            auth()->logout();
            Session()->flush();
            return view('auth.register');
        })->name('checkout');
    });
});
