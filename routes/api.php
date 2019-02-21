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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

/*
|--------------------------------------------------------------------------
| API Routes For Lists
|--------------------------------------------------------------------------
|
| API routes for CRUD operations on Recipe List
|
*/

Route::resource('lists', 'RecipeListController');

Route::get(
    'lists/{list}/relationships/user',
    [
        'uses' => RecipeListRelationshipController::class . '@user',
        'as' => 'lists.relationships.user'
    ]
);

Route::get(
    'lists/{list}/user',
    [
        'uses' => RecipeListRelationshipController::class . '@user',
        'as' => 'lists.user'
    ]
);
