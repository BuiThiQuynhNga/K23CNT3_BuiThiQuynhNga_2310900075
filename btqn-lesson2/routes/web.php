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
Route::get('/greeting', function () {
    return "HELLO WORLD";
});
//redirect
Route::redirect('/here','/three');
Route::get('/three', function () {
    return "redirect to three";
});
//route return view
Route::get('/quynh-nga', function (){
    return view('quynhnga');
});
#Route parameter
Route::get('/devmaster/{id}', function($id)
{
    return "<h1> Devmaster" .$id . "</h1>" ;
});
#optional parameter
Route::get('/dev/{name?}', function($name="Quỳnh Nga")
{
    return "<h1> Heloo" .$name . "</h1>" ;
});
