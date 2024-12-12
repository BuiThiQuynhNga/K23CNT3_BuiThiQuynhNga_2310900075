<?php
use App\Http\Controllers\BtqnKhoaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BtqnMonHocController;

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
//#Khoa-Detail
Route::get('/khoas',
        [BtqnKhoaController::class,'btqnGetAllKhoa'])->name('btqnkhoa.btqngetallkhoa');
Route::get('/khoas/detail/{makh}',
        [BtqnKhoaController::class,'btqnGetKhoa'])->name('btqnkhoa.btqngetkhoa');
//#khoa-Edit
Route::get('/khoas/edit/{makh}',
        [BtqnKhoaController::class,'btqnEdit'])->name('btqnkhoa.btqnedit');
Route::post('/khoas/edit',
        [BtqnKhoaController::class,'btqnEditSubmit'])->name('btqnkhoa.btqneditsubmit');
//#Khoa-Insert
Route::get('/khoas/insert',
        [BtqnKhoaController::class,'btqnInsert'])->name('btqnkhoa.btqninsert');
Route::post('/khoas/insert',
        [BtqnKhoaController::class,'btqnInsertSubmit'])->name('btqnkhoa.btqninsertsubmit');
Route::get('/khoas/delete/{makh}',
        [BtqnKhoaController::class,'btqnDelete'])->name('btqnkhoa.btqndelete');
Route::get('/monhocs',
        [BtqnMonHocController::class,'btqnList'])->name('btqnmonhoc.btqnlist');