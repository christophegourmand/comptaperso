<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\OrderController;

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

// SECTION - PUBLIC URIS =====================
Route::get('/', function () {
    return view('welcome');
});

// SECTION - URIs FOR AUTHENTICATED USERS =====================
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//NOTE: 'auth' and 'verified' are keys who point to real middleware (see: App/Http/Kernel.php)


Route::resource('bankAccounts', BankAccountController::class);

// SECTION - URIs FOR TESTS AND DEBUG =====================
Route::get(
    '/essais',
    function()
    {
        return view('essais'); //TODO : plus tard renvoyer vers un controller
    }
)->middleware(['auth', 'verified'])->name('essais');


