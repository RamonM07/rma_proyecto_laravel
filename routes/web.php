<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route:: group(['prefix'=>'layouts', 'as'=>'layouts'], function () {
    Route:: get ("/formulario", function ()
    {
        return view ('layouts.formulario');
    });
    Route:: get ("/checkout", function ()
    {
        return view ('layouts.checkout');
    });
    Route:: get ("/register", function ()
    {
        return view ('layouts.register');
    });
    Route:: get ("/template", function ()
    {
        return view ('layouts.template');
    });
    Route:: get ("/Wizard", function ()
    {
        return view ('layouts.Wizard');
    });
});
Route:: group(['prefix'=>'abp', 'as'=>'abp'], function () {
    Route:: get ("/abp", function ()
    {
        return view ('abp.abp');
    });
});
Route::get('formulario', function () {
    return view('layouts.formulario');
});
Route::get('example1', function () {
    return view('examples.example1');
});
Route::get('example2', function () {
    return view('examples.example2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
