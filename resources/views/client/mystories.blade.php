@extends('layout.client')
@section('pageTitle', 'Favorites')

@section('client_cont')

@auth
    <div class="mystories_whole_container rounded-3 pt-4 px-5 mt-4">

    
        <div class="card_header_container">
            <h3 class="text-center form_header_text"> MY STORIES </h3>
            <div class="header_line"></div>
        </div>

        <div class="row d-flex flex-row mx-1 my-4">
            <div class="col-10 search_filter_container d-flex align-items-centers">
                <div class="col-4 form-group d-flex rounded-5 py-1 px-3 bg-white shadow">
                    <i class="m-3 fa fa-search form_input_icon bpurple_highlighter"></i>
                    <input type="text" class="form-control shadow-none border-0 normal_text bg-transparent search_story_input" id="search_story" placeholder="Search story title here...">
                </div>
        
                <div class="px-2">
                    <select class="form-select dropdown_button rounded-5 px-4 py-3 shadow-none" aria-label="Default select example">
                        <option selected hidden> GENRE </option>
                        <option value="action">Action</option>
                        <option value="comedy">Comedy</option>
                        <option value="horror">Horror</option>
                        <option value="mystery">Mystery</option>
                        <option value="romance">Romance</option>
                        <option value="thriller">Thriller</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>  
            
            <div class="create_story_button_container col-2 d-flex justify-content-end align-items-center">
                <a href="/stories/create" class="create_story_button px-5 py-3 text-decoration-none rounded-1"> CREATE </a>
            </div>
        
        </div>
        
        <div class="container-fluid">

            <table id="mystories_table_contents" class="table table-dark mystories_table">
                <thead>
                  <tr>
                    <th scope="col" class="table_top_left">COVER PHOTO</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">GENRE</th>
                    <th scope="col">DATE CREATED</th>
                    <th scope="col">STATUS</th>
                    <th scope="col" class="table_top_right">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>

                {{-- Individual My Stories --}}
                @foreach ($stories as $story)
                    <tr>
                        <td> <img class="mystories_cover_img" src="{{asset('/storage/img/'.$story->cover)}}"/> </td>
                        <td class="mystories_story_title">{{ $story->title}}</td>
                        <td>{{ $story->genres}}</td>
                        <td>{{ $story->created_at}}</td>
                        <td>{{ $story->status}}</td>
                        <td>
                            <a href=""></a>
                            <form action="/stories/index/{{$story->id}}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="mystories_delete_button text-decoration-none px-3 py-1 rounded-1">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
              </table>
        </div>
    </div>
@endauth
@endsection