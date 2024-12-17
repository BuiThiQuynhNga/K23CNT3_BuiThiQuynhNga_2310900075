<?php
use App\Http\Controllers\BtqnSessionController;
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
Route::get('/btqnsession/get',[BtqnSessionController::class,'btqnGetSessionData'])->name('btqnsession.get');
Route::get('/btqnsession/set',[BtqnSessionController::class,'btqnStoreSessionData'])->name('btqnsession.set');
Route::get('/btqnsession/del',[BtqnSessionController::class,'btqnDeleteSessionData'])->name('btqnsession.del');
//ACCOUNT
Route::get('/btqn-login',[BtqnAccountController::class,'btqnLogin'])->name('btqnaccount.btqnlogin');
Route::post('/btqn-login',[BtqnAccountController::class,'btqnLogin'])->name('btqnaccount.btqnloginsubmit');
Route::get('/btqn-logout',[BtqnAccountController::class,'btqnLog'])->name('btqnaccount.btqnlogout');