@extends('layout.master')

@section('content')
    <div class="container-fluid">
      <div class="row">

        
        <div class="col-xl-10 col-xxl-10 tab-content content_container" id="nav-tabContent">
          <h2 class="tab_header"> BANNING <span class="purple_highlighter"> MANAGEMENT </span></h2>
          <div class="line"></div>

          <div class="col-3 search_input_field">
            <i class="m-3 fa fa-search search_icon"></i>
            <input id="search_input" type="text" class="search_input" placeholder="Search here...">
          </div>

          <div class="table_with_tabs_whole_container banning_table_margTop">

            <div class="table_contents">
              <table id="banned_accounts_table_values" class="table table-hover top_rated_stories_table table-borderless">
                <thead class="thead-light top_rated_stories_table_header">
                  <tr>
                    <th class="col-3 py-4 top_left_header col-3"> PEN NAME </th>
                    <th class="col-3 py-4"> FULL NAME </th>
                    <th class="col-3 py-4"> EMAIL </th>
                    <th class="col-3 py-4 top_right_header col-3">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Oblak Pudawdwti </td>
                        <td> Lebron James </td>
                        <td> 2020110023@gmail.com</td>
                        <td>
                            <button type="button" id="view_account_ban_details_button" class="btn action_button_ddark_blue"> VIEW </button>
                            <button type="button" id="unban_button" class="btn action_button_green"> UNBAN </button>
                        </td>
                    </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>

        <div id="unban_modal" class="modal">
          <div class="modal-content modal_confirm_prompt">
              <div class="modalHeader">
                <div class="modal_header_container">
                  <span class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                  <h1 id="modal_header_title"> UNBAN CONFIRMATION </h1>
                  <div class="modalLine"></div>
                </div>
              </div>
  
              <div id="modal_body">
                <p id="modal_body_title"> Do you want to proceed in <span class="green_highlighter"><b> UNBANNING </b></span> this user? </p>
          
                <div class="modal_content_container">
                  <button type="button" id="submit_button" class="btn modal_green_button"> YES </button>
                  <button type="button" id="cancel_modal" class="btn modal_neg_button"> NO </button>
                </div>
              </div>
          </div>
        </div>

        <div id="view_banned_user_modal" class="modal">
          <div class="modal-content ban_modal_content">
            <div class="modalHeader">
              <div class="modal_header_container">
                <span class="close close2"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <h1 id="modal_header_title"> BAN DETAILS </h1>
                <div class="modalLine"></div>
              </div>
            </div>

            <div id="modal_body">
              <p id="modal_body_title"> Reasons/remarks for <span class="red_highlighter"><b> BANNING: </b></span></p>
              <div class="modal_remarks_banning_container">
                <p id="modal_remarks_banning"> 
                  Use of curse words.
                  Anti-government contents.
                  Use of curse words.
                  Anti-government contents.
                </p>
              </div>
              
              <button id="close_modal" type="button" class="btn modal_pos_button view_banned_user_back_button"> OKAY </button>

            </div>
          </div>
        </div>
        



      </div>

      </div>
    </div>

@endsection