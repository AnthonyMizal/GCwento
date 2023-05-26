@extends('layout.client')
@section('pageTitle', 'Published Stories')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

@section('client_cont')

@auth

    {{-- <p>Hi {{auth()->user()->fullname}}</p> --}}

    <h1 class="pubstories_header dwhite_color">PUBLISHED <span class="bpurple_highlighter">STORIES</span></h1>
    <div class="pubstories_header_line"></div>
    
    <div class="d-flex align-items-center my-4">
        <form action="" method="GET" class="search_container col-4 form-group d-flex px-3 bg-white border">
            <i class="m-3 fa fa-search bpurple_highlighter"></i>
            <input type="text" name="search" class="form-control shadow-none border-0 normal_text bg-transparent" value="{{old('search', $search)}}" id="search" placeholder="Search story title here...">
        </form>

        <form action="" method="GET" class="col-2 genre_whole_container d-flex">
            @csrf
            <select class="form-select dropdown_button w-75 rounded-0 py-3 shadow-none text-center" name="genre" id="genre" aria-label="Default select example">
                <option selected hidden> GENRE </option>
                <option value="">All</option>
                <option value="action" {{ "action" == $selectedGenre ? 'selected' : '' }}>Action</option>
                <option value="comedy" {{ "comedy" == $selectedGenre ? 'selected' : '' }}>Comedy</option>
                <option value="horror" {{ "horror" == $selectedGenre ? 'selected' : '' }}>Horror</option>
                <option value="mystery" {{ "mystery" == $selectedGenre ? 'selected' : '' }}>Mystery</option>
                <option value="romance" {{ "romance" == $selectedGenre ? 'selected' : '' }}>Romance</option>
                <option value="thriller" {{ "thriller" == $selectedGenre ? 'selected' : '' }}>Thriller</option>
                <option value="educational" {{ "educational" == $selectedGenre ? 'selected' : '' }}>Educational</option>
                <option value="history" {{ "history" == $selectedGenre ? 'selected' : '' }}>History</option>
                <option value="others" {{ "others" == $selectedGenre ? 'selected' : '' }}>Others</option>
            </select>

            <button type="submit" class="filter_button text-decoration-none border-0"> <i class="m-3 fa fa-filter filter_icon"></i> </button>
        </form>
    </div>
    
    
    
<div class="container-fluid main_stories_container d-flex justify-content-center flex-wrap">

    @foreach ($stories as $story)
    @if ($story->accessibility == 'Private')
        @php
            $request = $story->requests->where('reader_id', auth()->user()->id)->first();
        @endphp
        @if ($request && $request->status == 'Approved')
            <a href="/story/{{$story->id}}" style="text-decoration: none">
                <div class="col-3 story_item_container m-1 animated bounceIn rounded-4 d-flex">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
                    </div>
                    <div class="story_block_details">
                        <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                        <p class="story_genre dwhite_color">GENRE: {{ $story->genres}}</p>
                        <p class="story_description">{{ $story->description}}</p>
                        <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
                        <p class="story_status status_public"><i class="fa fa-bullhorn status_public"></i> {{ $request->status}}</p>
                    </div>
                </div>
            </a>
        @else
            <div>
                <!-- Show a message indicating the request status -->
                @if ($request && $request->status == 'Pending')
                <div class="col-3 story_item_container m-1 animated bounceIn rounded-4 d-flex">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
                    </div>
                    <div class="story_block_details">
                        <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                        <p class="story_genre dwhite_color">GENRE: {{ $story->genres}}</p>
                        <p class="story_description">{{ $story->description}}</p>
                        <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
                        <p class="story_status status_pending"><i class="fa fa-clock-o status_pending"></i>&nbsp{{ $request->status}}</p>
                       </p>
                    </div>
                </div>
                @elseif ($request && $request->status == 'Rejected')
                <div class="col-3 story_item_container m-1 animated bounceIn rounded-4 d-flex">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
                    </div>
                    <div class="story_block_details">
                        <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                        <p class="story_genre dwhite_color">GENRE: {{ $story->genres}}</p>
                        <p class="story_description">{{ $story->description}}</p>
                        <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
                        <p class="story_status status_rejected"><i class="fa fa-times-circle status_rejected"></i>&nbsp{{ $request->status}}</p>
                    </div>
                </div>
                @else
                    <a href="#" onclick="sendRequest({{ $story->id }}, {{$story->user->id}}, {{auth()->user()->id}})" style="text-decoration: none">
                        <div class="col-3 story_item_container m-1 animated bounceIn rounded-4 d-flex">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
                            </div>
                            <div class="story_block_details">
                                <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                                <p class="story_genre dwhite_color">GENRE: {{ $story->genres}}</p>
                                <p class="story_description">{{ $story->description}}</p>
                                <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
                                <p class="story_status status_private"><i class="fa fa-clock-o status_private"></i>&nbsp{{ $story->accessibility}}</p>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        @endif
    @else
        <a href="/story/{{$story->id}}"  style="text-decoration: none">
            <div class="col-3 story_item_container m-1 animated bounceIn rounded-4 d-flex">
                <div class="d-flex align-items-center">
                    <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img" alt="storycover">
                </div>
                <div class="story_block_details">
                    <h3 class="story_title dwhite_color">{{ $story->title}}</h3>
                    <p class="story_genre dwhite_color">GENRE: {{ $story->genres}}</p>
                    <p class="story_description">{{ $story->description}}</p>
                    <p class="story_author bpurple_highlighter">- {{ $story->user->username}}</p>
                    <p class="story_status status_public"><i class="fa fa-bullhorn status_public"></i> {{ $story->accessibility}}</p>
                </div>
            </div>
        </a>
    @endif
@endforeach
</div>
@endauth
@endsection