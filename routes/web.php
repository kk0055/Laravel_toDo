<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::redirect('/','/tasks',301);
Route::resource('tasks',TaskController::class);
