<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    $value = Cache::get('test_key');
    
    return response()->json(['value' => $value]);
});

Route::post('/store', function (Request $request) {
    $value = Cache::put('two', $request, 3600);
    
    return response()->json(['value' => $value]);
});
