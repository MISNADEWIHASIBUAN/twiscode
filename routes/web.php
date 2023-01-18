<?php

use App\Models\Work;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;

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
    $works = Work::latest()->get()->take(3);
    $customers = Customer::latest()->get();
    return view('welcome', compact('works', 'customers'));
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'auth'])->name('logged_in');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.view');

    Route::prefix('admin/')->group(function () {
        Route::resource('work', WorkController::class);
        Route::resource('customer', CustomerController::class);
        Route::resource('user', UserController::class);
    });

    Route::post('logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
