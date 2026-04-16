<?php

use App\Http\Controllers\Ola;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ola', [Ola::class, 'mostrarOla']);


Route::controller(UsersController::class)->group(function () {
    Route::get('/users', 'getUsers');
});
