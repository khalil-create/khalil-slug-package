<?php

use Illuminate\Support\Facades\Route;
use khalil\slug2\Http\Controllers\SlugController;

Route::get('/slug-generate', [SlugController::class, 'index']);
