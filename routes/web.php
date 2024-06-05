<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;



Route::get('/hello', function () {
    return view('Hello');
});



Route::resource('image', ImageController::class);

Route::get("/image", [ImageController::class, 'index'])->name("image.index");
Route::get('/image/upload', [ImageController::class, 'create'])->name("images.create");
Route::post('/image', [ImageController::class, 'store'])->name("images.store");
