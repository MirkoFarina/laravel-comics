<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comics = config('db.comics');
    return view('comics', compact("comics"));
})->name('comics');


Route::get('/description/{id}', function ($id) {

    $comics = config('db.comics');
    $get_comics = array_filter($comics, fn($item) => $item['id'] == $id );
    $comic = $comics[array_key_first($get_comics)];

    return view('description-card', compact("comic"));
})->name('description');
