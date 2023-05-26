<?php

namespace App\Http\Controllers;
use App\Models\StoryRequest;
use Illuminate\Http\Request;


class RequestController extends Controller
{


    public function index() {
        $story_requests = StoryRequest::with('creator', 'reader', 'story')->where('creator_id', auth()->user()->id)->get();
        return view('client.storyrequest', compact('story_requests'));
    }


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


    public function approvedRequest(Request $request, $id)
    {
        $story_request = StoryRequest::find($id);
        $story_request->status = 'Approved';
        $story_request->save();
        return redirect('/mystories/requests');
    }

    public function rejectRequest(Request $request, $id)
    {
        $story_request = StoryRequest::find($id);
        $story_request->status = 'Reject';
        $story_request->save();
        return redirect('/mystories/requests');
    }

}
