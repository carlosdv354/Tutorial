<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;



Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/post/{post}', [PostController::class, 'show']);

/*
Route::get('/post/{post}/{category}', function ($post, $category) {
    return "bienvenido a {$post} de la {$category}";
});

Route::get('/post/{post}{category?}', function ($post, $category = null) {
    if ($category) {
        return "bienvenido a {$post} de la {$category}";
    }
    return "bienvenido a {$post} sin categoria";
});*/
