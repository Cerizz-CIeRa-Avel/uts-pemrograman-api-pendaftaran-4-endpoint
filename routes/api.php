<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/allusers', [UserController::class, 'index']);
Route::post('/createusers', [UserController::class, 'store']);
Route::put('/updateusers/{id}', [UserController::class, 'update']);
Route::delete('/deleteusers/{id}', [UserController::class, 'destroy']);