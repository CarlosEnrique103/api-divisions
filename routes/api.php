<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('divisions', [DivisionController::class, 'index']);
Route::get('divisions/{id}', [DivisionController::class, 'show']);
Route::get('divisions/{id}/list_of_divisions', [DivisionController::class, 'list_divisions']);
Route::get('divisions/{id}/upper_division', [DivisionController::class, 'upper_division']);

Route::post('divisions', [DivisionController::class, 'store']);

Route::put('divisions/{id}', [DivisionController::class, 'update']);

Route::delete('divisions/{id}', [DivisionController::class, 'delete']);

