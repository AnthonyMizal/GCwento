@extends('layout.master')

@section('pageTitle', 'Admin Users')

@section('content')
    <div class="container-fluid">

      <div class="row">
        
        <div class="col-10 tab-content content_container" id="nav-tabContent">
          
          <h2 class="tab_header"> USER <span class="purple_highlighter"> MANAGEMENT </span></h2>
          <div class="line"></div>

          <div class="col-3 search_input_field">
            <i class="m-3 fa fa-search search_icon"></i>
            <input id="search_input_user" type="text" class="search_input" placeholder="Search user here...">
          </div>

          <div class="row page_contents_container">
            <div class="table_contents">
              <table id="users_table_values" class="table table-hover top_rated_stories_table table-borderless">
                <thead class="thead-light top_rated_stories_table_header">
                  <tr>
                    <th scope="col" class="py-4 top_left_header col-3"> PEN NAME </th>
                    <th scope="col" class="py-4 col-3"> FULL NAME </th>
                    <th scope="col" class="py-4 col-3" > EMAIL </th>
                    <th scope="col" class="py-4 top_right_header col-3"> ACTIONS </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td> {{$user->username}} </td>
                    <td> {{$user->fullname}} </td>
                    <td> {{$user->email}} </td>
                    <td> 
                      <button type="button" id="user_details_button" class="btn action_button_ddark_blue action_button" onclick="getUserDetails({{$user->id}})"> VIEW </button>
                      @if ($user->status === 'Active')
                        <button type="button" class="status-button btn action_button_red action_button" data-user-id="{{ $user->id }}" data-status="Banned">BAN</button>
                      @else
                        <button type="button" class="status-button btn action_button_green action_button" data-user-id="{{ $user->id }}" data-status="Active">UNBAN</button>
                      @endif
                    </td>
                  </tr>      
                 @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <div id="ban_modal" class="modal">
          <div class="modal-content ban_modal_content">
            <div class="modalHeader">
              <div class="modal_header_container">
                <span class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <h1 id="modal_header_title"> BANNING CONFIRMATION </h1>
                <div class="modalLine"></div>
              </div>
            </div>

            <div id="modal_body">
              <p id="modal_body_title"> Enter the remarks/reasons for <span class="red_highlighter"><b> BANNING </b></span> this user:</p>
              <textarea class="form-control modal_body_text_input" placeholder="Type here..." id="modal_ban_remarks" ></textarea>

              <div class="modal_content_container">
                <button id="submit_modal" type="button" class="btn modal_pos_button"> SUBMIT </button>
                <button id="cancel_modal" type="button" class="btn modal_neg_button"> CANCEL </button>
              </div>
            </div>
          </div>
        </div>

        <div id="user_details_modal" class="modal">
          <div class="modal-content account_details_modal_content">
              <div class="modalHeader">
                <div class="modal_header_container">
                  <span class="close close2"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                  <h1 id="modal_header_title"> ACCOUNT DETAILS </h1>
                  <div class="modalLine"></div>
                </div>
              </div>
  
              <div id="modal_body">
                <div class="account_detail_modal_row1">

                  <div class="row_right">
                    <h3 class="modal_body_heading">Personal Information</h3>
                    <div class="modal_header_line"></div>

                    <div class="modal_personal_info_container mt-1 d-flex justify-content-between">
                      <div class="sec1 col-6">
                        <label for="modal_account_name" class="modal_account_label"> Full Name </label>
                        <p id="modal_account_name" name="modal_account_name"> </p>
                      </div>

                    </div>

                    <h3 class="modal_body_heading">Account Information</h3>
                    <div class="modal_header_line"></div>

                    <div class="modal_personal_info_container mt-1 d-flex justify-content-between">
                      <div class="sec1 col-6">
                        <label for="modal_account_email" class="modal_account_label"> Email </label>
                        <p id="modal_account_email" name="modal_account_email"></p>
                        <label for="modal_account_created" class="modal_account_label"> Created at </label>
                        <p id="modal_account_created" name="modal_account_created"></p>
                      </div>
                      <div class="sec2 col-6 text-end">
                        <label for="modal_account_penname" class="modal_account_label float-right"> Pen Name </label>
                        <p id="modal_account_penname" name="modal_account_penname"></p>
                        
                      </div>
                     
                    </div>

                    <h3 class="modal_body_heading">Stories Created Count</h3>
                    <div class="modal_header_line"></div>
                    <div class="d-flex justify-content-between mt-2">
                      <div class="modal_user_act_counter_container col border rounded-2 mx-1 d-flex justify-content-center align-items-center py-2">
                        <label for="modal_account_story_count" class="modal_account_label text-gray"> Pending Stories </label>
                        <p id="modal_account_pending_count" name="modal_account_story_count" class="modal_account_details_counter"></p>
                      </div>

                      <div class="modal_user_act_counter_container col border rounded-2 mx-1 d-flex justify-content-center align-items-center py-2">
                        <label for="modal_account_story_count" class="modal_account_label text-success"> Published Stories </label>
                        <p id="modal_account_story_count" name="modal_account_story_count" class="modal_account_details_counter"></p>
                      </div>

                      <div class="modal_user_act_counter_container col border rounded-2 mx-1 d-flex justify-content-center align-items-center py-2">
                        <label for="modal_account_story_count" class="modal_account_label text-danger"> Rejected Stories </label>
                        <p id="modal_account_reject_count" name="modal_account_story_count" class="modal_account_details_counter"></p>
                      </div>

                    </div>
                  </div>
                </div>
                <button type="button" id="close_modal" class="btn modal_pos_button d-flex float-end mt-4"> OKAY </button>  
              </div>
             
          </div>
        </div>



      </div>
    </div>

@endsection

@section('js')
<script src="{{ asset('js/admin_users.js') }}"></script>
@endsection