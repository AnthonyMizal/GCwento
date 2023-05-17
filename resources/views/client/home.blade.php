 @extends('layout.client')

@section('client_cont')


<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
 
    {{--  HOME --}}
 <div class="container-home" id="home">
    <div class="row">
        <div class="col">
            <h1>A Bookshelf In Your Pocket</h1>
        </div>

        <div class="col">
            <img class="home_img" src="../assets/General/Untitled design (24).png" alt="GCwento Logo">
        </div>
    </div>    
  </div>


  {{--  ABOUT --}}
  <div class="container-about" id="about">
    <div class="row">
        <div class="col">
            <img class="about_img" src="../assets/General/Untitled design (29).png" alt="?">
        </div>

        <div class="col">
            <h1>ABOUT</h1>
        </div>
    </div>    
  </div>
    

  {{--  SERVICES --}}
  <div class="container-services" id="services">
    {{-- <h1>services</h1> --}}
    <div class="row">
        <div class="col">
            <h1>services</h1>
        </div>

        <div class="col">
{{--        <img class="home_img" src="../assets/General/Untitled design (24).png" alt="GCwento Logo">--}}        </div>
        </div>    
  </div>


  {{--  CONTACT --}}
  <div class="container-contact" id="contact">
    <div class="row">
        <div class="col">
            <h1>contact</h1>
        </div>

        <div class="col">
           
        </div>
    </div>    
  </div>


    {{-- FOOTER --}}
<div class="container">
  <footer class="py-3 my-4">
        <img class="logo_footer" src="../assets/General/GCwento_purple_logo.png" alt="GCwento Logo">  
        <p class="text-center">LaraBuilt - BSIT 3</p>
        <p class="text-center">GCwento - Gordon College story publication platform is committed to constantly showcase and and feature the literary skills and knowledge 
of every stakeholders in the academe. The developers of GCwento continually aims to uphold its competencies to mold professional writers in the future.</p>
        <p class="text-center">Blk. 14 Ohio St. Kalaklan, Olongapo City       +649458404654     gcwento@gmail.com </p>
        <p class="text-center">All Rights Reserved 2023.</p>
  </footer>
</div>



  @endsection