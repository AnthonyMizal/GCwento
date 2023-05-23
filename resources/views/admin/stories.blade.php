@extends('layout.master')

@section('content')
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-xl-10 col-xxl-10 tab-content content_container" id="nav-tabContent">
            <h2 class="tab_header"> STORY <span class="purple_highlighter"> MANAGEMENT </span></h2>
            <div class="line"></div>

            <div class="col-7 search_dropdown_container">
              <div class="col-5 search_input_field">
                <i class="m-3 fa fa-search search_icon"></i>
                <input id="search_input" type="text" class="search_input" placeholder="Search user here...">
              </div>
              <div class="col-3 filter-group dropdown_filter_container">
                <select class="form-control table_drop_down" id="categoryFilter">
                  <option value=""> All </option>
                  <option value="Pending"> Pending </option>
                  <option value="Published"> Published </option>
                  <option value="Rejected"> Rejected </option>
                </select>
                <i class="fa fa-filter filter_icon"></i>
              </div>
            </div>
              
            <div class="row page_contents_container">
              
              <div class="stories_table_contents">
                <table id="stories_table_values" class="table table-hover top_rated_stories_table table-borderless">
                  <thead class="thead-light top_rated_stories_table_header">
                    <tr>
                      <th scope="col" class="py-4 top_left_header col-3"> TITLE </th>
                      <th scope="col" class="py-4 col-3"> GENRE </th>
                      <th scope="col" class="py-4 col-2" > AUTHOR </th>
                      <th scope="col" class="py-4 col-2" > STATUS </th>
                      <th scope="col" class="py-4 top_right_header col-2"> ACTIONS </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($stories as $story)
                    <tr>
                      <td>{{$story->title}}</td>
                      <td> Action </td>
                      <td>{{$story->user->fullname}}</td>
                      <td class="table_item_status_td"> 
                        <div class="table_item_status_dropdown_container">
                          <form action="{{ route('stories.updateStoryStatus', $story) }}" method="POST">
                            @csrf
                            @method('PATCH')
                          <select class="form-control table_item_status_dropdown" name="status" id="table_item_status">
                            <option value="Pending" {{$story->status == 'Pending' ? 'selected' : ''}}> Pending </option>
                            <option value="Publish" {{$story->status == 'Publish' ? 'selected' : ''}}> Publish </option>
                            <option value="Reject" {{$story->status == 'Reject' ? 'selected' : ''}}> Reject </option>
                          </select>
                          <i class="fa fa-filter filter_icon"></i>
                          <button type="submit" class="btn btn-link">Save</button>
                          </form>
                        </div>
                      </td>
                      <td> 
                        {{-- <a id="account_details_button" href="user/story/{{$story->id}}" class="btn action_button_ddark_blue">VIEW</a> --}}
                        <button id="account_details_button" type="button" class="btn action_button_ddark_blue" onclick="getUserStory({{$story->id}})"> VIEW </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>

    
        
        <div id="story_modal" class="story_modal">
          <div class="story_modal_content">
              <div class="modalHeader">
                <div class="modal_header_container">
                  <span class="close close2"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                  <h1 id="modal_header_title"> STORY DETAILS </h1>
                  <div class="modalLine"></div>
                </div>
              </div>
  
              <div id="modal_body">

                <div class="modal_account_dp_name_container d-flex">

                  <div class="modal_account_name_container">
                    <p class="modal_story_account_penname"><span id="modal_account_penname"></span></p>
                    <p class="modal_account_name_separator"> | </p>
                    <p class="modal_story_account_name"><span id="modal_account_name"></span></p>
                  </div>
                </div>

                <div class="modal_story_whole_line_separator"></div>

                <div class="modal_story_header_container d-flex justify-content-between">
                  <div class="modal_story_title_genre_container">
                    <p class="modal_story_title_container"> <span class="dpurple_highlighter"> TITLE: </span><span id="modal_story_title"></span> </p>
                    <p class="modal_story_genre_container"> <span class="dpurple_highlighter"> GENRE: </span><span id="modal_story_genre"> Romance, Thriller </span> </p>
                  </div>
                  <div class="modal_story_date_created_container d-flex">
                    <span class="modal_story_date_icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <p id="modal_story_date_created"> </p>
                  </div>
                </div>

                <div class="modal_story_content_container">
                  <p id="modal_story_content">
                  </p>
                </div>
                <button type="button" id="close_modal" class="btn modal_pos_button d-flex float-end m-0"> BACK </button>  
              </div>

          </div>
        </div>




      </div>

    </div>
{{-- 
    <div class="loader-wrapper">
      <img class="loader" src="../assets/General/GCwento_purple_logo.png">
    </div> --}}
@endsection