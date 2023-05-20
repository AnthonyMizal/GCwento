@extends('layout.client')
@section('pageTitle', 'Favorites')

@section('client_cont')

@auth

    <div class="whole_container rounded-3 py-4 px-5 mt-4">

    
        <div class="card_header_container">
            <h3 class="text-center form_header_text"> FAVORITES </h3>
        </div>

        <div class="row d-flex flex-row my-4">

        </div>
        
        <div class="container-fluid main_stories_container d-flex justify-content-center flex-wrap">
            @foreach ($favorites as $favorite)
            {{-- Individual Favorite Story Blocks --}}
            <a href="/story/{{$favorite->story->id}}">
                <div class="col-2 fav_story_item_container m-1 rounded-4 pt-3 px-2 d-flex flex-column align-items-center">
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
                        <p class="fav_story_genre dwhite_color">{{ $favorite->story->genres}}</p>
                        <p class="fav_story_author bpurple_highlighter">- {{ $favorite->story->user->username}}</p>
                    </div>
                </div>
            </a>
            @endforeach
            
        </div>

    </div>
@endauth
@endsection