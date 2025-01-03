<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BTQN_QUAN_TRIController;
use App\Http\Controllers\BTQN_LOAI_SAN_PHAMController;
use App\Http\Controllers\BTQN_SAN_PHAMController;
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
Route::get('/admins/btqn-login',[BTQN_QUAN_TRIController::class,'btqnLogin'])->name('admins.btqnLogin');
Route::post('/admins/btqn-login',[BTQN_QUAN_TRIController::class,'btqnLoginSubmit'])->name('admins.btqnLoginSubmit');
#admins - route
Route::get('/btqn-admins',function(){
    return view('btqnAdmins.btqnIndex');
});
//LOAI_SAN_PHAM
Route::get('/btqn-admins/btqn-loai-san-pham',[BTQN_LOAI_SAN_PHAMController::class,'btqnList'])->name('btqnadmins.btqnloaisanpham');
//create
Route::get('/btqn-admins/btqn-loai-san-pham/btqncreate',[BTQN_LOAI_SAN_PHAMController::class,'btqnCreate'])->name('btqnadmins.btqnloaisanpham.btqncreate');
Route::post('/btqn-admins/btqn-loai-san-pham/btqncreate',[BTQN_LOAI_SAN_PHAMController::class,'btqnCreateSubmit'])->name('btqnadmins.btqnloaisanpham.btqncreatesubmit');
//edit
Route::get('/btqn-admins/btqn-loai-san-pham/btqnedit/{id}',[BTQN_LOAI_SAN_PHAMController::class,'btqnEdit'])->name('btqnadmins.btqnloaisanpham.btqnedit');
Route::post('/btqn-admins/btqn-loai-san-pham/btqnedit',[BTQN_LOAI_SAN_PHAMController::class,'btqnEditSubmit'])->name('btqnadmins.btqnloaisanpham.btqneditsubmit');
//xóa
Route::get('/btqn-admins/btqn-loai-san-pham/btqndelete/{id}',[BTQN_LOAI_SAN_PHAMController::class,'btqnDelete'])->name('btqnadmins.btqnloaisanpham.btqndelete');

//SANPHAM
Route::get('/btqn-admins/btqn-san-pham',[BTQN_SAN_PHAMController::class,'btqnList'])->name('btqnadmins.btqnsanpham.btqnlist');
//create
Route::get('/btqn-admins/btqn-san-pham/btqn-create',[BTQN_SAN_PHAMController::class,'btqnCreate'])->name('btqnadmins.btqnsanpham.btqncreate');
Route::post('/btqn-admins/btqn-san-pham/btqn-create',[BTQN_SAN_PHAMController::class,'btqnCreateSubmit'])->name('btqnadmins.btqnsanpham.btqncreatesubmit');
//edit
Route::get('/btqn-admins/btqn-san-pham/btqnedit/{id}',[BTQN_SAN_PHAMController::class,'btqnEdit'])->name('btqnadmins.btqnsanpham.btqnedit');
Route::post('/btqn-admins/btqn-san-pham/btqnedit',[BTQN_SAN_PHAMController::class,'btqnEditSubmit'])->name('btqnadmins.btqnsanpham.btqneditsubmit');
//xóa
Route::get('/btqn-admins/btqn-san-pham/btqndelete/{id}',[BTQN_SAN_PHAMController::class,'btqnDelete'])->name('btqnadmins.btqnsanpham.btqndelete');



