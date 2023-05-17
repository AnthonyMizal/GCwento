@extends('layout.client')

@section('client_cont')
<a href="/stories/index" class="btn btn success btn-sm">Back</a>
<div class="card">
    
        <div class="card-header">
            <h3>View Story</h3>
        </div>
    

    <div class="card-body">
            <form action="/stories/index" method="POST">
                @csrf
                    <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>

                <div class="mb-3">
                    <label>Title</label>
                    <h3>{{$story->title}}</h3>
                </div>
                
                <div class="mb-3">
                    <label>Description</label>
                   <p>{{$story->description}}</p>
                </div>

                <div class="mb-3">
                    <label>Content</label>
                    <p>{{$story->content}}</p>
            </form>
        </div>
    </div>
   {{--  <h1>{{$story->title}}</h1>
    <p>{{$story->description}}</p>
    <p>{{$story->content}}</p> --}}
</div>
@endsection
