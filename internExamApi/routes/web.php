<?php

use Illuminate\Support\Facades\Route;
use app\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return 'hey users';
// });


