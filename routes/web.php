<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\ThirdpartyController;
use App\Http\Controllers\ThirdpartyCommentController;
use App\Http\Controllers\OperationCategoryController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\OperationController;

use App\Models\OperationCategory;
use App\Models\Thirdparty;
// use App\Http\Controllers\OrderController; // TODO : Remove this controller is useless (maybe it came with template)
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//NOTE: 'auth' and 'verified' are keys who point to real middleware (see: App/Http/Kernel.php)


Route::resource('bankAccounts', BankAccountController::class)->middleware(['auth', 'verified']);
Route::resource('thirdparties', ThirdpartyController::class)->middleware(['auth', 'verified']);
Route::resource('thirdparties.thirdpartyComments', ThirdpartyCommentController::class)->middleware(['auth', 'verified']);
Route::resource('operationCategories', OperationCategoryController::class)->middleware(['auth', 'verified']);
Route::resource('preferences', PreferenceController::class)->middleware(['auth', 'verified']);
Route::resource('bankAccounts.operations', OperationController::class)->middleware(['auth', 'verified']);


// SECTION - URIs FOR TESTS AND DEBUG =====================
Route::get(
    '/essais',
    function()
    {
        return view('essais'); //TODO : plus tard renvoyer vers un controller
    }
)->middleware(['auth', 'verified'])->name('essais');


