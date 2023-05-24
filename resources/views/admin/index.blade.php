@extends('layout.master')

@section('content')
    <div class="container-fluid">

      <div class="row">

        
        
          <div class="col-xl-10 col-xxl-10 tab-content content_container" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-panel" role="tabpanel" aria-labelledby="nav-panel-tab" tabindex="0">  

              <h2 class="tab_header"> DATA <span class="purple_highlighter"> OVERVIEW </span></h2>
              <div class="line"></div>

              <div class="panel_header_container">
                  <div class="row panel_header_row">
                    <div class="col-xl-5 col-xxl-5 tab_header_texts_container">
                      <p class="tab_header_account_name"> WELCOME, <span class="purple_highlighter">{{auth()->user()->fullname}}</span></p>
                      <div class="time_container">
                        <!-- <i class='bx bxs-calendar time_icon' id="time_icon"></i> -->
                        <h3 id="time" class="time_text"></h3>
                      </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 tab_header_image_container">
                      <img class="tab_header_image_icon" src="../assets/Admin/Panel/admin_dashboard_time_image.png" alt="">
                    </div>
                  </div>
              </div>
              
              <div class="row panel_board_row_container">
              
                <div class="panel_board_container">
                  <div class="row panel_board_icon_count_container">
                    <img class="panel_board_icon" src="../assets/Admin/Panel/circled_book_icon.png" alt="">
                    <h1 class="panel_board_count purple_highlighter">{{$pendingCount}}</h1>
                  </div>
                  <div class="panel_board_title_icon_container">
                    <h4 class="panel_board_title mt-3">Pending Stories</h4>
                    <a href="../html/admin_stories.html"><i class="m-3 fa fa-info-circle panel_board_info_icon"></i></a>
                  </div>
                </div>

                <div class="panel_board_container">
                  <div class="row panel_board_icon_count_container">
                    <img class="panel_board_icon" src="../assets/Admin/Panel/circled_adduser_icon.png" alt="">
                    <h1 class="panel_board_count purple_highlighter">{{$publishedCount}}</h1>
                  </div>
                  <div class="panel_board_title_icon_container">
                    <h4 class="panel_board_title mt-3">Published Stories</h4>
                    <a href="../html/admin_users.html"><i class="m-3 fa fa-info-circle panel_board_info_icon"></i></a>
                  </div>
                </div>

                <div class="panel_board_container">
                  <div class="row panel_board_icon_count_container">
                    <img class="panel_board_icon" src="../assets/Admin/Panel/circled_lockbook_icon.png" alt="">
                    <h1 class="panel_board_count purple_highlighter">{{$rejectedCount}}</h1>
                  </div>
                  <div class="panel_board_title_icon_container">
                    <h4 class="panel_board_title mt-3">Rejected Stories</h4>
                    <a href="../html/admin_banning.html"><i class="m-3 fa fa-info-circle panel_board_info_icon"></i></a>
                  </div>
                </div>

                <div class="panel_board_container">
                  <div class="row panel_board_icon_count_container">
                    <img class="panel_board_icon" src="../assets/Admin/Panel/circled_lockuser_icon.png" alt="">
                    <h1 class="panel_board_count purple_highlighter">{{$userCount-1}}</h1>
                  </div>
                  <div class="panel_board_title_icon_container">
                    <h4 class="panel_board_title mt-3">User Accounts</h4>
                    <a href="../html/admin_banning.html"><i class="m-3 fa fa-info-circle panel_board_info_icon"></i></a>
                  </div>
                </div>

              
            
          </div>
        

      </div>

    </div>


@endsection