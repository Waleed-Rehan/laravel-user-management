<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', fn() => redirect()->route('users.index'));
Route::resource('users', UserController::class);
