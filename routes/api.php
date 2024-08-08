<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\PostController;

Route::get('/index', [PostController::class, 'index']);

Route::post('/store', [PostController::class, 'store']);

Route::get('/show/{id}', [PostController::class, 'show']);
