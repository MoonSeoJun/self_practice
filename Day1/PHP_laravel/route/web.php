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

Route::get('/Korean', function (){
    $korean = [
      '동백꽃',
      '파수꾼',
      '치부'
    ];
    return view('hello',[
        'koreans' => $korean
    ]);
});

Route::get('/English', function (){
    $English = [
        'Harry Poter',
        'Tom and Jerry',
        'Dr.gikill and Hide'
    ];
   return view('contact',[
       'Englishs' => $English
   ]);
});
