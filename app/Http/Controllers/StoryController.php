<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Comment;
use App\Models\Favorite;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $stories = Story::with('user')->get();
        return view('client.index', compact('stories'));
    }


    public function userStory()
    {   
        $stories = Story::where('user_id', auth()->user()->id)->get();
        return view('client.mystories', compact('stories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('cover');

        if($request->hasFile('cover')) {

            $filenameWithExt = $file->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $file->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

           $file->storeAs('img', $fileNameToStore);
        
        } else {
            $fileNameToStore = "";
        }

        $story = new Story;
        $story->user_id = $request->user_id;
        $story->title = $request->title;
        $story->description = $request->description;
        $story->content = $request->content;
        $story->cover = $fileNameToStore;
        $story->save();
        return redirect('stories/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Story::find($id);
        $comments = Comment::where('story_id', $id)->get();
        $favorites = Favorite::where('story_id', $id)->get();
        return view('client.read', compact('story', 'comments', 'favorites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::find($id);

        return view('client.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('cover');

        if($request->hasFile('cover')) {

            $filenameWithExt = $file->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $file->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

           $file->storeAs('img', $fileNameToStore);
        
        } else {
            $fileNameToStore = "";
        }

        $story = Story::find($id);
        $story->user_id = $request->user_id;
        $story->title = $request->title;
        $story->description = $request->description;
        $story->content = $request->content;
        $story->cover = $fileNameToStore;
        $story->save();
        return redirect('stories/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();
        return redirect('stories/index');
    }

    public function favorites()
    {
        return view('client.favorites');
    }

    public function myProfile()
    {
        return view('client.myprofile');
    }

    public function myStories()
    {
        return view('client.mystories');
    }

    public function adminPublishedCount(){
        $pendingCount = Story::where('status', 'Pending')->count();
        $publishedCount = Story::where('status', 'Published')->count();
        $rejectedCount = Story::where('status', 'Rejected')->count();
        return view('admin.html.index', compact('publishedCount', 'pendingCount', 'rejectedCount'));
    }

    public function adminStories()
    {
        $stories = Story::with('user')->get();

        return view('admin.html.stories', compact('stories'));
        // return $stories;
    }

    public function adminGetStory()
    {
        $stories = Story::with('user')->get();

        return $stories;
        // return $stories;
    }
}
