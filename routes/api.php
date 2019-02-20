<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| General API Routes
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

/*
|--------------------------------------------------------------------------
| API Routes For Lists
|--------------------------------------------------------------------------
|
| API routes for CRUD operations on Recipe List
|
*/

// Get all lists
Route::get('lists', 'RecipeListController@index');
// Get single lists
Route::get('list/{id}', 'RecipeListController@show');
// Create new list
Route::post('list', 'RecipeListController@create');
// Update list
Route::put('lists', 'RecipeListController@update');
// Delete list
Route::delete('list/{id}', 'RecipeListController@destroy');
