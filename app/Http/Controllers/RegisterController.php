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
        $validatedData = $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'username' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);
    
        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password'])
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

    public function termsAndConditions(){

        return view('auth.terms');
    }


}
