<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::name('admin.')->prefix('admin')->group(function (){
   Route::middleware('auth:sanctum')->group(function (){
       Route::prefix('questions')->group(function (){
           Route::get('/', [\App\Http\Controllers\Admin\QuestionController::class, 'index']);
           Route::get('/{question}', [\App\Http\Controllers\Admin\QuestionController::class, 'show']);
           Route::post('/', [\App\Http\Controllers\Admin\QuestionController::class, 'store']);
           Route::delete('/{question}', [\App\Http\Controllers\Admin\QuestionController::class, 'destroy']);
       });
       Route::post('users', [\App\Http\Controllers\Admin\UserController::class,'store']);
   });
});



Route::name('user.')->prefix('user')->group(function (){
    Route::post('login', [\App\Http\Controllers\User\AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('answers/{question}', [\App\Http\Controllers\User\AnswerController::class,'store']);

        Route::prefix('questions')->group(function (){
            Route::get('/', [\App\Http\Controllers\User\QuestionController::class,'index']);
            Route::get('/{question}', [\App\Http\Controllers\User\QuestionController::class,'show']);
        });

    });
});
