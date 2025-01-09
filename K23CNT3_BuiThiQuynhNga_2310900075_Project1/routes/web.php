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
#admins - danh muc--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/btqn-admins/btqndanhsachquantri/btqndanhmuc', [BTQN_DANH_SACH_QUAN_TRIController::class, 'danhmuc'])->name('btqnAdmins.btqndanhsachquantri.danhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/btqn-admins/btqndanhsachquantri/btqntintuc', [BTQN_DANH_SACH_QUAN_TRIController::class, 'tintuc'])->name('btqnAdmins.btqndanhsachquantri..danhmuc.tintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/btqn-admins/btqndanhsachquantri/btqnsanpham', [BTQN_DANH_SACH_QUAN_TRIController::class, 'sanpham'])->name('btqnAdmins.btqndanhsachquantri.danhmuc.sanpham');
// Mô tả sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/btqn-admins/btqndanhsachquantri/btqnmota/{id}', [BTQN_DANH_SACH_QUAN_TRIController::class, 'mota'])->name('btqnAdmins.btqndanhsachquantri.danhmuc.mota');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/btqn-admins/btqndanhsachquantri/btqnnguoidung', [BTQN_DANH_SACH_QUAN_TRIController::class, 'nguoidung'])->name('btqnAdmins.btqndanhsachquantri.nguoidung');
Route::get('/btqn-admins/search-admins', [BTQN_SAN_PHAMController::class, 'searchAdmins'])->name('btqnuser.searchAdmins');
Route::get('/btqn-admins/btqn-login',[BTQN_QUAN_TRIController::class,'btqnLogin'])->name('admins.btqnLogin');
Route::post('/btqn-admins/btqn-login',[BTQN_QUAN_TRIController::class,'btqnLoginSubmit'])->name('admins.btqnLoginSubmit');
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
//Danh Sách Quản Trị
Route::get('/btqn-admins/btqn-quan-tri',[BTQN_QUAN_TRIController::class,'btqnList'])->name('btqnadmins.btqnquantri');
//detail
Route::get('/btqn-admins/btqn-quan-tri/btqn-detail/{id}', [BTQN_QUAN_TRIController::class, 'btqnDetail'])->name('btqnadmin.btqnquantri.btqnDetail');
//create
Route::get('/btqn-admins/btqn-quan-tri/btqn-create',[BTQN_QUAN_TRIController::class,'btqnCreate'])->name('btqnadmin.btqnquantri.btqncreate');
Route::post('/btqn-admins/btqn-quan-tri/btqn-create',[BTQN_QUAN_TRIController::class,'btqnCreateSubmit'])->name('btqnadmin.btqnquantri.btqnCreateSubmit');
//edit
Route::get('/btqn-admins/btqn-quan-tri/btqn-edit/{id}', [BTQN_QUAN_TRIController::class, 'btqnEdit'])->name('btqnadmin.btqnquantri.btqnedit');
Route::post('/btqn-admins/btqn-quan-tri/btqn-edit/{id}', [BTQN_QUAN_TRIController::class, 'btqnEditSubmit'])->name('btqnadmin.btqnquantri.btqnEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/btqn-admins/btqn-quan-tri/btqn-delete/{id}', [BTQN_QUAN_TRIController::class, 'btqnDelete'])->name('btqnadmin.btqnquantri.btqndelete');



