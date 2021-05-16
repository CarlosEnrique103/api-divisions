<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\Division;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('divisions', function() {
    return Division::all();
});

Route::post('divisions', function(Request $request) {
    return Division::create($request->all());
});


Route::get('divisions/{id}', function($id) {
    return Division::find($id);
});

Route::get('divisions/{id}/list_of_divisions', function($id) {
    return Division::find($id)->divisions;
});

Route::get('divisions/{id}/upper_division', function($id) {
    return Division::find($id)->parent;
});

Route::put('divisions/{id}', function(Request $request, $id) {
    $division = Division::findOrFail($id);
    $division->update($request->all());
    return $division;
});


Route::delete('divisions/{id}', function($id) {
    $division = Division::find($id)->delete();
    return 204;
});
