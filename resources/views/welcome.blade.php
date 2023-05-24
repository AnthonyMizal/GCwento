<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GCwento </title>
    <link rel="icon" href="{{url('/assets/General/GCwento_purple_logo.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_nav.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
</head>

{{-- asim mo tony --}}

<body>
    @include('includes.usernav')
    <div class="container-fluid"> 
        
        <div data-bs-spy="scroll" data-bs-offset="0" tabindex="0">
 
            {{--  HOME --}}
        <div class="container_home row d-flex justify-content-center align-items-center" id="home">
            <div class=" col-5 d-flex justify-content-center align-items-center">
                <div class=" home_main_text_container">
                    <h1 class="title bounceIn">A BOOKSHELF <br/>
                        IN YOUR <br>
                        POCKET
                    </h1>
                    <h5>Read anytime and anywhere in a touch of your finger!</h5>
                    <a href="/stories/index" class="btn get_started_button text-decoration-none rounded-5 py-3 px-5 mt-4"> GET STARTED </a>

                    <div class="socmed_icon_container mt-4 d-flex align-items-center">
                        <i class="m-2 fa fa-instagram dwhite_color socmed_icon"></i>
                        <i class="m-2 fa fa-twitter dwhite_color socmed_icon"></i>
                        <i class="m-2 fa fa-facebook dwhite_color socmed_icon"></i>
                        <img class="mx-2 img-fluid gc_logo_icon" src="{{url('/assets/General/gordon-college-logo.png')}}"/>
                        <img class="mx-2 img-fluid gc_logo_icon" src="{{url('/assets/General/gc_ccs.png')}}"/>
                    </div>
                </div>
            </div>
    
            <div class="col-5 d-flex justify-content-center animated bounceInDown">
                <img class="home_img animated infinite pulse" src="/assets/General/welc_home_img.png">
            </div>

            <img class="line1" src="{{url('/assets/General/line2.png')}}"/>
            <img class="line2" src="{{url('/assets/General/line2.png')}}"/>
        </div>
        
        
        {{--  ABOUT --}}
        <div class="container-fluid" id="about">
            <img class="img-fluid" src="{{url('/assets/General/wave.png')}}" style="width: 100%"/>
            <div class="container_about d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <img class="about_img animated w-50" src="../assets/General/welc_about_img.png">
                </div>
        
                <div class="about_us_contents col-5 d-flex flex-column justify-content-center">
                    <h3 class="text-end"> What is GCwento </h3>
                    <h1 class="welc_header_perSec text-end dwhite_color"> ABOUT US </h1>
                    <p class="welc_cont_perSec text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </div>    

            <img class="line3" src="{{url('/assets/General/line1.png')}}"/>
        </div>

        {{--  SERVICES --}}
        <div class="container-fluid">
            <div class="container_services" id="services">
                    
                <h1 class="welc_header_perSec text-center dwhite_color"> SERVICES </h1>
                <div class="header_line"></div>
               
                <div class="row services_content d-flex justify-content-center align-items-center">
                    <div class="col-4 p-5">
                        <div class=" col d-flex justify-content-center mb-4">
                            <img class="serv_icon" src="../assets/General/serv_book.png">
                        </div>

                        <p class="welc_cont_perSec">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
                    </div>

                    <div class="col-4 p-5 d-flex flex-column justify-content-center">
                        <div class=" col d-flex justify-content-center mb-4">
                            <img class="serv_icon" src="../assets/General/serv_copy.png">
                        </div>   

                        <p class="welc_cont_perSec">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv eniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
                    </div>
                </div>
            </div>
            <img class="line4" src="{{url('/assets/General/line2.png')}}"/>
        </div>
            
        {{--  CONTACT --}}
        <div class="container-fluid">
            <div class="row container_contact d-flex justify-content-center align-items-center" id="contact">
                <div class="col-6 pt-4">
                    <h1 class="welc_header_perSec text-center dwhite_color"> CONTACT US </h1>
                    <div class="header_line"></div>
                    <div class="services_content d-flex justify-content-center align-items-center mt-5">
                        <div class="col-4">
                            <div class="col d-flex justify-content-center mb-4">
                                <img class="w-50" src="../assets/General/cont_loc.png">
                            </div>
                            <p class="welc_cont_perSec text-center"> Olongapo City</p>  
                        </div>

                        <div class="col-4">
                            <div class="col d-flex justify-content-center mb-4">
                                <img class="w-50" src="../assets/General/cont_tel.png">
                            </div>
                            <p class="welc_cont_perSec text-center">0945-840-4654 </p>  
                        </div>

                        <div class="col-4">
                            <div class="col d-flex justify-content-center mb-4">
                                <img class="w-50" src="../assets/General/cont_mes.png">
                            </div>
                            <p class="welc_cont_perSec text-center">gcwento@gmail.com</p>  
                        </div>
                    </div>
                </div>
                
                <img class="line5" src="{{url('/assets/General/line1.png')}}"/>
                <img class="line6" src="{{url('/assets/General/line2.png')}}"/>

                <div class="col-2 d-flex justify-content-end">
                    <img class="w-75" src="../assets/General/contact_image.png">
                </div>
            </div>
            <img class="img-fluid" src="{{url('/assets/General/wavebot.png')}}" style="width: 100%"/>
            
        </div>
        
    
        
            {{-- FOOTER --}}
        <div class="container">
          <footer class="py-3 my-4">
                <div class=" col d-flex justify-content-center mb-4">
                    <img class="logo_footer mx-auto" src="../assets/General/GCwento_purple_logo.png" alt="GCwento Logo">  
                </div>
                
                <p class="text-center dwhite_color"><b class="dwhite_color">LaraBuilt - BSIT 3B</b></p>
                <p class="text-center"><span class="dwhite_color"> GCwento </span> - Gordon College story publication platform is committed to constantly showcase and and feature the literary skills and knowledge of every stakeholders in the academe. The developers of GCwento continually aims to uphold its competencies to mold professional writers in the future.</p>
                <p class="text-center">Blk. 14 Ohio St. Kalaklan, Olongapo City | 0945-840-4654 | gcwento@gmail.com </p>
                <p class="text-center"> <b class="dwhite_color">All Rights Reserved 2023.</b></p>
          </footer>
        </div>
        
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/admin_stories.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>


</html>