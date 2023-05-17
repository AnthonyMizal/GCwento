@extends('layout.userLoginReg')


<link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_loginReg.css') }}" >


@section('pageTitle', 'Login')

@section('logReg_content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card card_whole_container" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block loginReg_icon_container" style="border-radius: 1rem 0 0 1rem;">
                                <img class="w-100 mt-2 img-fluid" src="{{url('/assets/General/login_image_brt.png')}}"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="post" action="{{ route('login.perform') }}">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img class="w-25 img-fluid" src="{{url('/assets/General/GCwento_purple_logo.png')}}"/>
                                        </div>

                                        <h5 class="fw-bold mb-3 pb-2" style="letter-spacing: 1px; color: #3D3D3D;">Sign into your account</h5>
                    
                                        <div class="form-group mt-3 d-flex form_icon_input border rounded-5 py-1 px-3">
                                            <i class="m-3 fa fa-user form_input_icon bpurple_highlighter"></i>
                                            <input type="email" class="form-control shadow-none border-0 normal_text" value="{{ old("email")}}" name="email" placeholder="Domain Email" required="required" autofocus>
                                        </div>

                                        @if ($errors->has('email'))
                                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                            @endif

                                        <div class="form-group mt-3 d-flex form_icon_input border rounded-5 py-1 px-3">
                                            <i class="m-3 fa fa-lock form_input_icon bpurple_highlighter"></i>
                                            <input type="password" class="form-control shadow-none border-0 normal_text" value="{{ old("password")}}" name="password" placeholder="Password" required="required">
                                        </div>

                                        @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif


                                        <div class="mt-3 mb-4">
                                            <button class="col-12 rounded-2 login_reg_button" type="submit"> LOGIN </button>
                                        </div>

                                        <h6 class="form-text text-muted mx-auto normal_text text-center">Does not have any account yet? <a class="text-primary bpurple_highlighter bold_highlighter text-decoration-none" href="{{ route('register.show') }}"> REGISTER</a> </h6>
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