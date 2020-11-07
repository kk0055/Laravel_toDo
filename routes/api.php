<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::group(['as' => 'api'], function(){
 Route::apiResource('tasks',TaskApiController::class);
});
