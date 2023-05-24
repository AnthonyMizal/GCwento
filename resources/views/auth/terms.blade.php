@extends('layout.userLoginReg')

<link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_loginReg.css') }}" >

@section('pageTitle', 'Terms and Conditions')

@section('logReg_content')
    
    <div class="terms_conditions_container w-75 border-bottom my-4 m-auto bg-white rounded-4 p-3">
        <a href="/register"><i class="fa fa-arrow-left form_input_icon bpurple_highlighter rounded-5 py-2 px-3"></i></a>
    
        <div class="main_header_container d-flex flex-column mx-auto text-center border-bottom">
            <img class="tac_header_logo img-fluid mx-auto" src="{{url('/assets/General/GCwento_purple_logo.png')}}"/>
            <h1 class="purple_highlighter"> GCWENTO <span class="bpurple_highlighter"> Terms & Conditions</span></h1>
        </div>

        <div class="terms_gen_details col-10 mx-auto my-3">
            <p>Welcome to GCwento platform, owned and created by LaraBuilt of BSIT 3B. The developers who created this platform are Jazmine Althea T. Isip, Anthony E. Mizal, and Nathaniel E. Ribada. They have worked diligently to bring you this platform where you can unleash your creativity and share your stories with the world. GCwento is a space for storytellers to connect and engage with a community of readers. <br><br>

            This page provides the platform's Terms and Conditions, which are essential guidelines that govern your use of GCwento. It is important to familiarize yourself with these terms as they outline the rights and responsibilities of both users and the platform. By using GCwento, creating your account, and utilizing the platform to publish your own stories or engage with other users' content, you implicitly agree to abide by these Terms and Conditions.<br><br>
        
            The Terms and Conditions act as a contract between you and GCwento, ensuring a safe and respectful environment for all users. They cover a wide range of aspects, including intellectual property rights, user conduct, content moderation, and privacy policies. It is crucial to understand and comply with these terms to maintain a positive and inclusive atmosphere within the GCwento community.<br><br>

            However, if you do not agree with any of the Terms and Conditions outlined by GCwento, you are not permitted to use the platform's services. We value your freedom of choice and encourage you to find alternative platforms that align better with your preferences. Our goal is to foster a community of passionate storytellers and enthusiastic readers who can engage and grow together within the boundaries of our Terms and Conditions.
            </p>
        </div>

        <div class="card_header_container mt-4 mb-3">
            <h3 class="text-center form_header_text">IMPORTANT NOTICE</h3>
        </div>

        <div class="list_container">
            <div class="row d-flex justify-content-center mb-2">
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-user notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>You need an account</h4>
                        <p class="notice_content">To get the most out of GCwento, you’ll need to register, choose an account name, and set a password.</p>
                    </div>
                </div>
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-book notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>Your content is yours</h4>
                        <p class="notice_content">Your story, your property. Keep in mind that the contents of your story must be user-friendly. Five rejections of story will lead to banning of account.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-2">
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-ban notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>Account Banning</h4>
                        <p class="notice_content">Banning of accounts will be strictly implemented. Any actions that might hurt others' emotional beings are greatly monitored.</p>
                    </div>
                </div>
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-commenting notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>Commenting</h4>
                        <p class="notice_content">Every comments are closely monitored by the administrators. Any hurtful comments or usage of curse words are strictly prohibited and will result to banning of account.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-2">
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-balance-scale notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>Don’t break the law</h4>
                        <p class="notice_content">Don’t take any action that infringes or violates other people’s rights, violates the law, or breaches any contract or legal duty you have toward anyone.</p>
                    </div>
                </div>
                <div class="col-5 notice_item rounded-3 d-flex align-items-center mx-1 py-2 px-2">
                    <div class="col-2">
                        <i class="m-3 fa fa-desktop notice_icon bpurple_highlighter rounded-5 py-2 px-3"></i>
                    </div>
                    <div class="col-9 notice_details">
                        <h4>Don’t harm anyone’s computer</h4>
                        <p class="notice_content">Don’t distribute software viruses, or anything else (code, films, programs) designed to interfere with the proper function of any software.</p>
                    </div>
                </div>
            </div>

            

            






        </div>


    </div>



@endsection