@extends('layout.master')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-xl-7 col-xxl-5 image_container">
          <img class="login_image" src="../assets/Admin/Login/Login_icon.png" >
        </div>

        <div class="col-lg-5 col-xl-4 col-xxl-3 admin_login_form_container">
            <div class="header_container">
              <img class="form_logo" src="../assets/General/GCwento_purple_logo.png">
              <h3 class="bpurple_highlighter"> ADMIN <span class="purple_highlighter"> LOGIN</span> </h3>
            </div>
            <div class="form_container">
              <form method="post" action="{{ route('login.perform') }}">
                @csrf

                <div class="input_container">
                  <i class='bx bxs-user input_icon'></i>
                  <input type="email" id="admin_email" class="form-control form-control-lg form_input" value="{{ old("email")}}" name="email" placeholder="Admin Email" required="required" autofocus/>
                </div>

                @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif

                <div class="input_container">
                  <i class='bx bxs-lock-alt input_icon'></i>
                  <input type="password" id="admin_password" class="form-control form-control-lg form_input" value="{{ old("password")}}" name="password" placeholder="Admin Password" required="required"/>
                </div>

                @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif

                <button type="submit" class="btn btn-primary admin_login_button"> LOGIN </button>
                <p class="version_num"> GCwento Admin - v1.0</p>
      
              </form>
            </div>
        </div>

      </div>

    </div>

@endsection
