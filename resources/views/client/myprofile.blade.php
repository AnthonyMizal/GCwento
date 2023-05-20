@extends('layout.client')
@section('pageTitle', 'My Profile')

@section('client_cont')

@auth
    <div class="whole_container rounded-3 py-4 px-5 mt-4">
        <div class="card_header_container">
            <h3 class="text-center form_header_text"> ACCOUNT MANAGEMENT </h3>
        </div>

        <div class="w-75 my-3 mx-auto d-flex flex-column">
            <div class="d-flex justify-content-end">
                <div class="act_overview_container rounded-2 d-flex flex-column justify-content-center align-items-center px-2 py-4 bg-white">
                    <div class="act_overview_header_container">
                        <p class="purple_highlighter">Activity</p>
                        <h1 class="purple_highlighter overview_text">OVER<span class="bpurple_highlighter">VIEW</span></h1>
                    </div>
        
                    <div class="row col-12 stories_fav_container text-center">
                        <div class="col-6">
                            <h3 class="overview_number purple_highlighter">{{$storyCount}}</h3>
                            <h4 class="overview_mainlabel">Stories</h4>
                        </div>
                        <div class="col-6">
                            <h3 class="overview_number bpurple_highlighter">{{$favoriteCount}}</h3>
                            <h4 class="overview_mainlabel">Favorites</h4>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="profile_details_container bg-white p-5 pb-4 rounded-3 my-3">
                <div class="card_header_container">
                    <h5 class="purple_highlighter acc_inf_header_text"> ACCOUNT <span class="bpurple_highlighter">INFORMATION</span> </h5>
                    <div class="header_line_inner mb-3"></div>
                </div>
                <form action="/myprofile/{{auth()->user()->id}}" method="POST">
                    @csrf
                    @method('PATCH')

                    <label class="profile_input_label"> Name </label>
                    <input type="text" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="fullname" value="{{ $user->fullname }}" placeholder="ex. John F. Doe">

                    <label class="profile_input_label"> Domain Email </label>
                    <input type="email" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="email" value="{{ $user->email }}" placeholder="ex. 202012345@gordoncollege.edu.ph">


                    <label class="profile_input_label"> Username </label>
                    <input type="test" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="username" value="{{ $user->username }}" placeholder="ex. UniqueName">

                

                {{-- <label class="profile_input_label"> Password </label>
                <input type="password" class="form-control shadow-none normal_text border rounded-2 p-3 mb-4" name="password" value="{{ $user->password }}" placeholder="Enter password">


                <label class="profile_input_label"> Password Confirmation</label>
                <input type="password" class="form-control shadow-none normal_text border rounded-2 p-3 mb-4" name="password_confirmation" value="{{ old("password") }}" placeholder="Enter password"> --}}

            </div>

            <div class="d-flex justify-content-center mt-3">
                <button class="col-4 profile_save_button border-0 rounded-5 py-3" type="submit"> SAVE </button>
            </div>
        </form>

        </div>

        

    </div>
@endauth
@endsection