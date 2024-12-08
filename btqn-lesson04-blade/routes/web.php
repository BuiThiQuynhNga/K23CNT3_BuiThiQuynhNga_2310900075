<?php

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
#view
Route::get('btqn-view1',function(){
    return view('btqn-view1',['name'=>"K23CNT3 - Project1 - Quỳnh Nga"]);
});
Route::get('/btqn-view2',function(){
    return view('btqn-view2',[
                    'name'=>"K23CNT3 - Project1 - Quỳnh Nga",
                    'array'=>[1,5,0,8],
                ]);
});
Route::get('/btqn-view3',function(){
    return view('btqn-view3',[
                    'name' =>["QuynhNga","K23CNT3","12345"],
                    'arr'  =>[1,5,0,8],
                    'users'=>[],
                ]);
});

