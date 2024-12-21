<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/test', function(){
    return 'ok';
});
Route::post('/message',[MessageController::class,'sendMessage']);

