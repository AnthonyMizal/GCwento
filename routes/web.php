<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Models\Story;

Route::get('stories', [StoryController::class, 'index']);

Route::get('story', function () {
    $story = Story::all();
    return $story;
});
