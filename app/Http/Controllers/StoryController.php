<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function getstories() {
        $stories = Story::all();
        return $stories;
    }

    public function addstory(Request $request) {
        $story = new Story;
        $story->title = $request->title;
        $story->description = $request->description;
        $story->content = $request->content;
        $story->cover = $request->cover;
        $story->status = $request->status;
        $story->user_id = $request->user_id;
        $story->save();
        return $story;
    }

}
