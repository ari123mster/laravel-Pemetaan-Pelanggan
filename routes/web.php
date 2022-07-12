<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TampilController;

//teknisi
use App\Http\Controllers\Teknisi\TeknisiController;
use App\Http\Controllers\Teknisi\DashboardController;
use App\Http\Controllers\Teknisi\HistoryTeknisiController;
use App\Http\Controllers\Teknisi\TampilTeknisiController;
// use App\Http\Controllers\Teknisi\HistoryController;
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
    return redirect()->route('login');
});

//  Route::get('/admin/dashboard', function () {
//      return view('admin/dashboard');

//  })->middleware(['auth'])->name('dashboard');





require __DIR__ . '/auth.php';
Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::get('admin-page', function () {
        return view('admin/dashboard');
    })->name('admin.page');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
    //user
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::post('/admin/user/create', [UserController::class, 'create']);
    Route::get('/admin/user/store', [UserController::class, 'store']);
    Route::get('/admin/user/{user}', [UserController::class, 'edit']);
    Route::post('/admin/user/{id}', [UserController::class, 'update']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete']);

    //wilayah
    Route::get('/admin/region', [RegionController::class, 'index']);
    Route::post('/admin/region/create', [RegionController::class, 'create']);
    Route::get('/admin/region/store', [RegionController::class, 'store']);
    Route::get('/admin/region/{id}', [RegionController::class, 'edit']);
    Route::post('/admin/region/{id}', [RegionController::class, 'update']);
    Route::get('/admin/region/delete/{id}', [RegionController::class, 'delete']);

    //customer
    Route::get('/admin/customer', [CustomerController::class, 'index']);
    Route::post('/admin/customer/create', [CustomerController::class, 'create']);
    Route::get('/admin/customer/store', [CustomerController::class, 'store']);
    Route::get('/admin/customer/{id}', [CustomerController::class, 'edit']);
    Route::post('/admin/customer/{id}', [CustomerController::class, 'update']);
    Route::get('/admin/customer/detail/{id}', [CustomerController::class, 'detail']);
    Route::get('/admin/customer/delete/{id}', [CustomerController::class, 'delete']);

    Route::get('/admin/tampil', [TampilController::class, 'index']);

    Route::get('/admin/riwayat', [HistoryController::class, 'index']);
    Route::post('/admin/riwayat/create', [HistoryController::class, 'create']);
    Route::get('/admin/riwayat/store', [HistoryController::class, 'store']);
    Route::get('/admin/riwayat/{id}', [HistoryController::class, 'edit']);
    Route::post('/admin/riwayat/{id}', [HistoryController::class, 'update']);
    Route::get('/admin/riwayat/delete/{id}', [HistoryController::class, 'delete']);
});

Route::group(['middleware' => ['role:teknisi', 'auth']], function () {
    Route::get('teknisi-page', function () {
        return view('teknisi.dashboard');
    })->name('teknisi.page');
    //teknisi
    Route::get('/teknisi/dashboard', [DashboardController::class, 'index']);

    //customer
    Route::get('/teknisi/customer/detail/{id}', [TeknisiController::class, 'detail']);
    Route::get('/teknisi/customer', [TeknisiController::class, 'index']);
    Route::get('/teknisi/customer/{id}', [TeknisiController::class, 'edit']);

    //riwayat

    Route::get('/teknisi/riwayat', [HistoryTeknisiController::class, 'index']);
    Route::post('/teknisi/riwayat/create', [HistoryTeknisiController::class, 'create']);
    Route::get('/teknisi/riwayat/store', [HistoryTeknisiController::class, 'store']);
    Route::get('/teknisi/riwayat/{id}', [HistoryTeknisiController::class, 'edit']);
    Route::post('/teknisi/riwayat/{id}', [HistoryTeknisiController::class, 'update']);
    Route::get('/teknisi/riwayat/delete/{id}', [HistoryTeknisiController::class, 'delete']);

    //grafik
    Route::get('/teknisi/tampil', [TampilTeknisiController::class, 'index']);
});
