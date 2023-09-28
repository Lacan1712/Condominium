<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homelogin\Main;


Route::get('/principal',[Main::class, 'index'] );
Route::post('/login',[Main::class, 'Store']);
Route::get('/condominium',[Main::class, 'pageIndex'] ) ;

