<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// COMMENTARE solo dopo aver CREATO API/ArticleController
// Route::get('articles', function(){
//     return response()->json([
//         'success'=>true,
//         'response'=>App\Article::all()
//     ], 200);
// });

Route::get('articles', 'Api\ArticleController@index');


// COMMENTARE solo dopo aver CREATO API/CateogoryController
Route::get('categories', function(){
    return response()->json([
        'success'=>true,
        'response'=>App\Category::all()
    ], 200);
});

// Route::get('categories', 'Api\CateogoryController@index');


// COMMENTARE solo dopo aver CREATO API/TagController
Route::get('tags', function(){
    return response()->json([
        'success'=>true,
        'response'=>App\Tag::all()
    ], 200);
});

// Route::get('tags', 'Api\TagController@index');
