<?php

namespace App\Http\Controllers;
use App\Models\StoryRequest;
use Illuminate\Http\Request;


class RequestController extends Controller
{
    public function sendRequest(Request $request)
{
    $storyId = $request->story_id;
    $readerId = $request->reader_id;
    $creatorId = $request->creator_id;

    // Create a new request instance
    $storyRequest = new StoryRequest();
    $storyRequest->story_id = $storyId;
    $storyRequest->reader_id = $readerId;
    $storyRequest->creator_id = $creatorId;
    $storyRequest->status = 'Pending';
    $storyRequest->save();

    return response()->json(['message' => 'Request sent successfully']);
}
}
