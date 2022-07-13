<?php

use Illuminate\Support\Facades\Route;
use Sopamo\LaravelFilepond\Http\Controllers\FilepondController;

Route::prefix('api')->group(function () {
    Route::get('/', [FilepondController::class, 'show'])->name('filepond.get');
});
