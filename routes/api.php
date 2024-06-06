<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::name('admin.')->prefix('admin')->group(function (){
//   Route::post('login', [\App\Http\Controllers\Admin\AuthController::class, 'login']);
   Route::middleware('auth:sanctum')->group(function (){
       Route::post('users', [\App\Http\Controllers\Admin\UserController::class,'store']);
       Route::post('questions', [\App\Http\Controllers\Admin\QuestionController::class, 'store']);
       Route::get('questions', [\App\Http\Controllers\Admin\QuestionController::class, 'index']);
   });
});



Route::name('user.')->prefix('user')->group(function (){
    Route::post('login', [\App\Http\Controllers\User\AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('answers/{question}', [\App\Http\Controllers\User\AnswerController::class,'store']);
        Route::get('questions', [\App\Http\Controllers\User\QuestionController::class,'index']);
    });
});
