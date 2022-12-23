<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics = config('comics');
    return view('comics', compact("comics"));
})->name('comics');


Route::get('/description', function (){
    return view('description-card');
})->name('comics');
