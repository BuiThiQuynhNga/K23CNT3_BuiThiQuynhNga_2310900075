<?php
use App\Http\Controllers\BtqnKhoaController;
use Illuminate\Support\Facades\Route;

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
Route::get('/khoas',[BtqnKhoaController::class,'btqnGetAllKhoa'])->name('btqnkhoa.btqngetallkhoa');
Route::get('/khoas/detail/{makh}',
        [BtqnKhoaController::class,'btqnGetKhoa'])->name('btqnkhoa.btqngetkhoa');
Route::get('/khoas/edit/{makh}',
        [BtqnKhoaController::class,'btqnEdit'])->name('btqnkhoa.btqnedit');
Route::get('/khoas/edit',
        [BtqnKhoaController::class,'btqnEditSubmit'])->name('btqnkhoa.btqneditsubmit');
