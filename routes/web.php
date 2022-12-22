<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('comics');
})->name('comics');


Route::get('/description', function (){
    return view('description-card');
})->name('comics');
