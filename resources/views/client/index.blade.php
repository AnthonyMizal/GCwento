@extends('layout.client')
@section('pageTitle', 'Published Stories')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

@section('client_cont')

@auth

    {{-- <p>Hi {{auth()->user()->fullname}}</p> --}}

    <h1 class="pubstories_header dwhite_color">PUBLISHED <span class="bpurple_highlighter">STORIES</span></h1>
    <div class="pubstories_header_line"></div>
    <div class="row d-flex flex-row my-4">
        <div class="col-10 search_filter_container d-flex align-items-centers">
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
        
        <div class="create_story_button_container col-2 d-flex justify-content-end align-items-center">
            <a href="create" class="create_story_button px-5 py-3 text-decoration-none rounded-1"> CREATE </a>
        </div>
    
    </div>
    
    
<div class="container-fluid main_stories_container d-flex justify-content-center flex-wrap">
    @foreach ($stories as $story)
    
    <a href="/story/{{$story->id}}" style="text-decoration: none">
        <div class="col-3 story_item_container m-1 rounded-4 d-flex">
            <div class="d-flex align-items-center">
                <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
            </div>
            <div class="story_block_details">
                <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                <p class="story_genre dwhite_color"> GENRE: Grilled, Balut</p>
                <p class="story_description">{{ $story->description}}</p>
                <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
            </div>
        </div>
    </a>

    @endforeach
</div>
@endauth
@endsection