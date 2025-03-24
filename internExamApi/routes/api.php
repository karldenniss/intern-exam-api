<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/users', function() {
//     return 'Hey';
// });
//all users
Route::resource('/users', UserController::class);

// //Active users
Route::get('/activeUsers', [UserController::class, 'activeUsers']);
Route::get('/users/search/{name}', [UserController::class, 'search']);

// //Create Form
// Route::get('/users/create', [UserController::class, 'create'])->name('create');

// //Store User
// Route::post('/users', [UserController::class, 'store']);

// // Edit Form
// Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// // Update User
// Route::put('/users/{user}', [UserController::class, 'update']);

// // Delete User
// Route::delete('/users/{user}', [UserController::class, 'destroy']);

// //Single User
// Route::get('/users/{user}', [UserController::class, 'show']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
