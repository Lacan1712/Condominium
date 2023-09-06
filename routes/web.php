<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homelogin\Main;


Route::get('/principal',[Main::class, 'index'] );
