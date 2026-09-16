<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/projects', [ProjectController::class, 'store'])
    ->middleware('auth')
    ->name('projects.store');