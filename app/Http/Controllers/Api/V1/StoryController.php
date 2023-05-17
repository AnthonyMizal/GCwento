<?php


namespace App\Http\Controllers\Api\V1;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{

       
    public function index() {
        $stories = Story::all();
        return $stories;
    }

    public function gettotalpublishedstories() {
        $stories = Story::where('status', 'Published')->count();
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
