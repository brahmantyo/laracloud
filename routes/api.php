<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'ok';
});
Route::post('/message', [MessageController::class, 'sendMessage']);
