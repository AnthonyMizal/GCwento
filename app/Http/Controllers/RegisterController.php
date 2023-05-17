<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Story;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Hash;
class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function register(Request $request){
        // dd($request);
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect('/stories/index')->with('success', 'Succesfully Created an Account!');
    }

    public function edit($id) {
        $user = User::find($id);
        $favoriteCount = Favorite::where('user_id', $id)->count();
        $storyCount = Story::where('user_id', $id)->count();
        return view('client.myprofile', compact('user', 'favoriteCount', 'storyCount'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->username = $request->username;

        $user->save();
        return redirect('stories/index');
    }

}
