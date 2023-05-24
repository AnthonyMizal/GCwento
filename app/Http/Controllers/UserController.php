<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Story;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function adminUserDetails($id)
     {
         $users = User::where('id', $id)->get();

         return response()->json($users);
     }

     public function adminUserPendingCount($id)
     {
        $pending = Story::where('status', 'Pending')
        ->where('user_id', $id)
        ->count();

        return response()->json($pending);
     }

     public function adminUserPublishCount($id)
     {
        $publish = Story::where('status', 'Publish')
        ->where('user_id', $id)
        ->count();

        return response()->json($publish);
     }

     public function adminUserRejectCount($id)
     {
        $reject = Story::where('status', 'Reject')
        ->where('user_id', $id)
        ->count();

        return response()->json($reject);
     }

    public function index()
    {
        return view('client.login');
    }

    public function userAdminTable()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }


    public function updateStatus(Request $request, User $user)
    {
        $user->update(['status' => $request->input('status')]);
    
        return response()->json(['message' => 'User status updated successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
