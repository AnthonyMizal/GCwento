@extends('layout.client')
@section('pageTitle', 'Reading')

@section('client_cont')
<form action="/read/story" method="POST">
    @csrf
        <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>

    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{asset('/storage/img/'.$story->cover)}}" class="cover_img">
        </div>
        <div class="story_block_details">
            <h3 class="read_story_title dwhite_color">{{$story->title}}</h3>
            <p class="read_story_genre dwhite_color"> GENRE: {{ $story->genres}}</p>
            <p class="read_story_author">- {{ $story->user->username}}</p><br>  


            @php
                $checker = False;
            @endphp

            @foreach ($favorites as $favorite)


            

            @if($story->id == $favorite->story_id and auth()->user()->id == $favorite->user_id)
                @php
                    $checker = True;
                    break;
                    
                @endphp
            @else
                @php
                    $checker = False;
                @endphp
            @endif

            
            @endforeach

            @if($checker == False)
                <a href="/favorite/story/{{auth()->user()->id}}/{{$story->id}}" class="read_addToFavButton border-0 rounded-2 text-decoration-none"><i class="fa fa-plus"></i> ADD TO FAVORITES</a>  
            @else

                <button type="submit" class="read_addedToFavButton border-0 rounded-2 text-decoration-none" disabled><i class="fa fa-check" aria-hidden="true"></i> ADDED TO FAVORITES</button>
                {{-- <a href="/favorite/remove/{{$favorite->id}}" class="read_addToFavButton border-0 rounded-2 text-decoration-none"><i class="fa fa-plus"></i> REMOVE TO FAVORITES</a>   --}}
            @endif
            
       </div>
    </div>

    <div class="read_story_content_container rounded-3 py-3 px-5 mt-4">
        <p class="read_story_content">
            {{$story->content}}
        </p>
    </div>

    <div class="comments_container rounded-3 py-4 px-5 mt-4">
        <div class="card_header_container">
            <h3 class="text-center form_header_text">COMMENTS</h3>
            <div class="header_line"></div>
        </div>


    </form>

    <div class="comment_item_container my-3">
        {{-- Individual Comments --}}
        @foreach ($comments as $comment)
        <div class="comment_item mb-3">
            <p class="read_comment_username dwhite_color">{{ $comment->user->username}}</p>
            <p class="read_comment_datetime dwhite_color">{{ $comment->created_at}}</p>
            <p class="read_comment_content">{{ $comment->comment }}</p>
        </div>
        @endforeach
    </div>

        <form class="d-flex justify-content-between align-items-center" action="{{route('comment.add')}}" method="POST">
            @csrf
            <div class="form-group comment_input">
                <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>
                <input type="text" name="story_id" class="form-control" value="{{$story->id}}" hidden>
                <input type="text" class="form-control shadow-none bg-white border-1 px-3 py-2 rounded-5" name="comment" placeholder="Enter your comments here...">
            </div>
            <button class="btn m-1" type="submit"><i class="fa fa-send submit_comment_icon"></i></button>
        </form>
     
    </div>

@endsection