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
                      <p class="tab_header_account_name"> WELCOME, <span class="purple_highlighter"> ADMIN1!</span></p>
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
                    <h1 class="panel_board_count purple_highlighter"> 2 </h1>
                  </div>
                  <div class="panel_board_title_icon_container">
                    <h4 class="panel_board_title mt-3">User Accounts</h4>
                    <a href="../html/admin_banning.html"><i class="m-3 fa fa-info-circle panel_board_info_icon"></i></a>
                  </div>
                </div>

                <h2 class="tab_rated_stories_header"> TOP RATED <span class="purple_highlighter"> STORIES </span></h2>

                <div class="top_rated_stories_table_container">
                  <table class="table table-hover top_rated_stories_table table-borderless">
                    <thead class="thead-light top_rated_stories_table_header">
                      <tr>
                        <th scope="col" class="py-4 top_left_header col-2">RANK</th>
                        <th scope="col" class="py-4 col-2">STARS</th>
                        <th scope="col" class="py-4 col-3" >TITLE</th>
                        <th scope="col" class="py-4 col-3">GENRE</th>
                        <th scope="col" class="py-4 top_right_header col-2">AUTHOR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="purple_highlighter"> 1 </th>
                        <td> 69 </td>
                        <td> Kalampag ng Papag </td>
                        <td> Horror, Romance, Thriller, Comedy </td>
                        <td> diakosianthony </td>
                      </tr>
                      <tr>
                        <th scope="row" class="purple_highlighter"> 2 </th>
                        <td> 55 </td>
                        <td> Orbiter </td>
                        <td> Romance </td>
                        <td> akotosithea </td>
                      </tr>
                      <tr>
                        <th scope="row" class="purple_highlighter"> 3 </th>
                        <td> 33 </td>
                        <td> Laravel </td>
                        <td> Horror </td>
                        <td> kim </td>
                      </tr>
                      <tr>
                        <th scope="row" class="purple_highlighter"> 4 </th>
                        <td> 30 </td>
                        <td> Hatdog ni Aljur </td>
                        <td> Romance </td>
                        <td> nathoy21 </td>
                      </tr>
                      <tr>
                        <th scope="row" class="purple_highlighter"> 5 </th>
                        <td> 21 </td>
                        <td> Finding Osama </td>
                        <td> Action </td>
                        <td> Osama Binladen </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            
          </div>
        

      </div>

    </div>


@endsection