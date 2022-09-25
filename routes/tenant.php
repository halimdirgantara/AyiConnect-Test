<?php

declare (strict_types = 1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
 */

Route::middleware([
    'web',
    'auth',
    InitializeTenancyBySubdomain::class,
    // InitializeTenancyByDomainOrSubdomain::class,
    // PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get('dashboard', [HomeController::Class, 'index'])->name('dashboard');
});
