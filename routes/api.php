<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Story;
use App\Models\Genre;


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

Route::post('genre/create', [App\Http\Controllers\GenreController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('stories', [StoryController::class, 'getstories']);
// Route::get('total/publishedstories', [StoryController::class, 'gettotalpublishedstories']);
// Route::post('story/create', [StoryController::class, 'addstory']);

// Route::get('storiesTest', 'StoryController@getstories');
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('stories', StoryController::class);
});
// Route::post('story/create', function (Request $request){

//     $story = new Story;
//     $story->title = $request->title; 
//     $story->description = $request->description;
//     $story->content = $request->content;
//     $story->cover = $request->cover;
//     $story->status = $request->status;
//     $story->user_id = $request->user_id;
//     $story->save();

//     return $story;
// });
