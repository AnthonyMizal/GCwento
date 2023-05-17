@extends('layout.userLoginReg')


<link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_loginReg.css') }}" >


@section('pageTitle', 'Register')

@section('logReg_content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12" >
                    <div class="card card_whole_container" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block loginReg_icon_container" style="border-radius: 1rem 0 0 1rem;">
                                <img class="w-100 mt-2 img-fluid" src="{{url('/assets/General/reg_image.png')}}"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="post" action="{{ route('register.perform') }}">
                                        @csrf
                                        <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                            <img class="w-25 img-fluid" src="{{url('/assets/General/GCwento_purple_logo.png')}}"/>
                                            <h1 class="form_header bpurple_highlighter"> REGISTER </h1>
                                        </div>

                                        <hr>
                                        
                                        {{-- <h5 class="fw-bold mb-3 pb-2" style="letter-spacing: 1px; color: #3D3D3D;">Sign into your account</h5> --}}
                    
                                        <label class="normal_text"> Name </label>
                                        <input type="text" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="fullname" value="{{ old("fullname")}}" placeholder="ex. John F. Doe">
                                        @if ($errors->has('fullname'))
                                        <span class="text-danger text-left">{{ $errors->first('fullname') }}</span>
                                        @endif
                                        <label class="normal_text"> Domain Email </label>
                                        <input type="email" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="email" value="{{ old("email")}}" placeholder="ex. 202012345@gordoncollege.edu.ph">
                                        @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                        @endif
                                        <label class="normal_text"> Username </label>
                                        <input type="test" class="form-control shadow-none normal_text border rounded-2 p-3 mb-3" name="username" value="{{ old("username")}}" placeholder="ex. UniqueName">
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                        <label class="normal_text"> Password </label>
                                        <input type="password" class="form-control shadow-none normal_text border rounded-2 p-3 mb-4" name="password" value="{{ old("password")}}" placeholder="Enter password">
                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                        <label class="normal_text"> Password Confirmation</label>
                                        <input type="password" class="form-control shadow-none normal_text border rounded-2 p-3 mb-4" name="password_confirmation" value="{{ old("password")}}" placeholder="Enter password">
                                        @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                        <hr class="mb-4">
                                    
                                        <div class="mt-3 mb-4">
                                            <button class="col-12 rounded-2 login_reg_button" type="submit"> REGISTER </button>
                                        </div>

                                        <h6 class="form-text text-muted mx-auto normal_text text-center"> Already have an account? <a class="text-primary bpurple_highlighter bold_highlighter text-decoration-none" href="{{ route('login.show') }}"> LOGIN </a> </h6>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection