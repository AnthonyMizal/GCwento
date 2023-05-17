@extends('layout.client')
@section('pageTitle', 'Favorites')

@section('client_cont')

@auth

    <div class="whole_container rounded-3 py-4 px-5 mt-4">

    
        <div class="card_header_container">
            <h3 class="text-center form_header_text"> FAVORITES </h3>
            <div class="header_line"></div>
        </div>

        <div class="row d-flex flex-row my-4">
            <div class="search_filter_container d-flex justify-content-center align-items-centers">
                <div class="col-4 form-group d-flex rounded-5 py-1 px-3 bg-white shadow">
                    <i class="m-3 fa fa-search form_input_icon bpurple_highlighter"></i>
                    <input type="text" class="form-control shadow-none border-0 normal_text bg-transparent search_story_input" placeholder="Search story title here...">
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
        </div>
        
        <div class="container-fluid main_stories_container d-flex justify-content-center flex-wrap">
            @foreach ($favorites as $favorite)
            {{-- Individual Favorite Story Blocks --}}
            <a href="">
                <div class="col-2 fav_story_item_container m-1 rounded-4 pt-3 px-2 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex">
                        <img class="fav_cover_img img-fluid" src="{{asset('/storage/img/'.$favorite->story->cover)}}"/>
                        <a href=""></a>
                        <form action="/favorite/{{$favorite->id}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn "><i class="fa fa-trash delete_icon red_highlighter"></i></button>
                        </form>
                        
                        
                    </div>
                    <div class="fav_story_block_details text-center mt-2">
                        <h3 class="fav_story_title dwhite_color">{{ $favorite->story->title}}</h3>
                        <p class="fav_story_genre dwhite_color"> GENRE: Grilled, Balut</p>
                        <p class="fav_story_author bpurple_highlighter">- {{ $favorite->story->user->username}}</p>
                    </div>
                </div>
            </a>
            @endforeach
            
        </div>

    </div>
@endauth
@endsection