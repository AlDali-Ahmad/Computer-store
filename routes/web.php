<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CarsContreller;
use \App\Http\Controllers\Compeuterscontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[CarsContreller::class,'index'])->name('page.index');
Route::get('/about',[CarsContreller::class,'about'])->name('page.about');
Route::get('/contact',[CarsContreller::class ,'contact'])->name('page.contact');

Route::resource('compeuters',Compeuterscontroller::class);
   // ->only('index','show');

/*
Route::get('/about',function (){
    $fillter=request('namePage');
   if(isset($fillter)){
       return 'The Pagrs IS Name <span style="color: #f80d0d">'.strip_tags($fillter).'</span>';
   };
    return 'The Pagrs IS Name <span style="color: #f80d0d">All Pages</span>';
});*/
