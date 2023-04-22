<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Story;
use App\Http\Controllers\StoryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stories', [StoryController::class, 'getstories']);
Route::post('story/create', [StoryController::class, 'addstory']);

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
