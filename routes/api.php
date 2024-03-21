<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; //import thecontroller to be used



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Route::get('route domain', [controller to use::class, 'function to hot with this route'])
Route::get('/items', [ItemController::class, 'index']);
Route::prefix('/item')->group( function () {
        Route::post('/store', [ItemController::class, 'store']);
        Route::put('/{id}', [ItemController::class, 'update']);
        Route::delete('/{id}', [ItemController::class, 'destroy']);
    }
);