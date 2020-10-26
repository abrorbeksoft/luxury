<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
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

//
//Route::get("/{any}",function (){
//
//    return view('app');
//
//})->where('any','.*');



Route::get('/',"PagerController@home")->name('home');
Route::get('/men',"PagerController@men")->name('men');
Route::get('/women',"PagerController@women")->name('women');
Route::get('/kids',"PagerController@kids")->name('kids');
Route::get('/blog',"PagerController@blog")->name('blog');
Route::get('/contact',"PagerController@contact")->name('contact');
Route::get('/single/{alias}',"PagerController@single")->name('single');

Route::get('/lang',function (\Illuminate\Http\Request $request){

    Cookie::queue('lang',$request->lang,10);

    return redirect()->back();
});

Route::get('/currency',function (\Illuminate\Http\Request $request){

    Cookie::queue('currency',$request->currency,10);

    return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
