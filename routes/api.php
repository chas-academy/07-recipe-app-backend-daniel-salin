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
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
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



// Fetch all lists
Route::resource('lists', 'RecipeListController');

// Fetch Single List
Route::get(
    'list/{list}',
    [
        'uses' => RecipeListController::class . '@showList',
        'as' => 'list'
    ]
    );

// Fetch User List
Route::get(
    'user/{user}/lists',
    [
        'uses' => RecipeListController::class . '@showUserList',
        'as' => 'user.lists.show'
    ]
    );

// Create new List
Route::post(
    'list',
    [
        'uses' => RecipeListController::class . '@create',
        'as' => 'lists.create'
    ]
    );

// Delete List
Route::delete(
    'list/{list}',
    [
        'uses' => RecipeListController::class . '@destroy',
        'as' => 'lists.destroy'
    ]
    );

// Update List (with new recipes)
Route::put(
    'list/{list}',
    [
        'uses' => RecipeListController::class . '@update',
        'as' => 'lists.update'
    ]
);

// User and user relationship 
Route::get(
    'list/{list}/relationships/user',
    [
        'uses' => RecipeListRelationshipController::class . '@user',
        'as' => 'lists.relationships.user'
    ]
    );

Route::get(
    'list/{list}/user',
    [
        'uses' => RecipeListRelationshipController::class . '@user',
        'as' => 'lists.user'
    ]
    );