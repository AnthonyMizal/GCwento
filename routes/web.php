<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('admin_index', function () {
//     return view('admin.html.index');
// });

// Route::get('admin_users', function () {
//     return view('admin.html.users');
// });

// Route::get('admin_stories', function () {
//     return view('admin.html.stories');
// });

// Route::get('admin_banning', function () {
//     return view('admin.html.banning');
// });

// Admin
Route::get('admin/users', [App\Http\Controllers\UserController::class, 'userAdminTable']);
Route::get('getStory', [App\Http\Controllers\StoryController::class, 'adminGetStory']);
Route::get('admin/stories', [App\Http\Controllers\StoryController::class, 'adminStories']);
Route::get('admin/index', [App\Http\Controllers\StoryController::class, 'adminPublishedCount']);
Route::get('user/story/{id}', [App\Http\Controllers\StoryController::class, 'adminUserStories']);
Route::get('user/detail/{id}', [App\Http\Controllers\UserController::class, 'adminUserDetails']);
Route::get('user/publishCount/{id}', [App\Http\Controllers\UserController::class, 'adminUserPublishCount']);
Route::get('user/rejectCount/{id}', [App\Http\Controllers\UserController::class, 'adminUserRejectCount']);
Route::get('user/pendingCount/{id}', [App\Http\Controllers\UserController::class, 'adminUserPendingCount']);
// Client

Route::get('register/termsandconditions', [App\Http\Controllers\RegisterController::class, 'termsAndConditions']);


// Route::get('login', [App\Http\Controllers\UserController::class, 'index']);

//Refactoring of route
Route::group(['namespace' => 'App\Http\Controllers'], function ()
{
    Route::get('/login', 'LoginController@show')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login.perform');
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    Route::get('/login/admin', 'LoginController@showAdmin')->name('login.showAdmin');


    Route::patch('users/{user}', 'UserController@updateStatus')->name('users.updateStatus');
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::post('stories/comment', 'CommentController@store')->name('comment.add');
    
    Route::get('get/comment', 'CommentController@index')->name('comment.index');
    
    Route::patch('stories/{story}', 'StoryController@updateStoryStatus')->name('stories.updateStoryStatus');
    // Route::get('favorites', 'FavoriteController@index')->name('favorite.index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('stories/index', [App\Http\Controllers\StoryController::class, 'index']);
    Route::get('stories/create', [App\Http\Controllers\StoryController::class, 'create']);
    Route::post('stories', [App\Http\Controllers\StoryController::class, 'store']);
    Route::get('story/{id}', [App\Http\Controllers\StoryController::class, 'show']);

    Route::get('stories/index/{id}/edit', [App\Http\Controllers\StoryController::class, 'edit']);
    Route::patch('stories/index/{id}', [App\Http\Controllers\StoryController::class, 'update']);
    Route::delete('stories/index/{id}', [App\Http\Controllers\StoryController::class, 'destroy']);
    Route::get('favorite/story/{user_id}/{story_id}', [App\Http\Controllers\FavoriteController::class, 'store']);
    Route::delete('favorite/{id}', [App\Http\Controllers\FavoriteController::class, 'destroy']);
    
    Route::get('favorites', [App\Http\Controllers\FavoriteController::class, 'index']);
    // Route::get('myprofile', [App\Http\Controllers\StoryController::class, 'myProfile']);
    Route::get('mystories', [App\Http\Controllers\StoryController::class, 'userStory']);

    Route::get('myprofile/{id}', [App\Http\Controllers\RegisterController::class, 'edit']);
    Route::patch('myprofile/{id}', [App\Http\Controllers\RegisterController::class, 'update']);


});