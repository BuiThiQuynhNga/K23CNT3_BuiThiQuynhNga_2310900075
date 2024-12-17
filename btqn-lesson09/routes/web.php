<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BtqnSinhVienController;
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

Route::get('/', function () {
    return view('welcome');
});
//Sinh Viên / Model;
Route::get('/btqn-sinhviens',[BtqnSinhVienController::class,'btqnList'])->name('BtqnSinhVien.btqnList');
Route::get('/btqn-sinhviens/create',[BtqnSinhVienController::class,'btqnCreate'])->name('BtqnSinhVien.btqnCreate');
Route::post('/btqn-sinhviens/create',[BtqnSinhVienController::class,'btqnCreateSubmit'])->name('BtqnSinhVien.btqnCreateSubmit');
