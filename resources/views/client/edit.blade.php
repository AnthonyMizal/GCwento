@extends('layout.client')

@section('client_cont')

@push('css')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

    <div class="card">
        <div class="card-header">
            <h3>Edit Story</h3>
        </div>

        <div class="card-body">
            <form action="/stories/index/{{$story->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>

                <div class="mb-3">
                    <label class="input_label">Upload Cover</label>
                    <input type="file" name="cover" value="{{$story->cover}}" class="form-control upload_cover w-25 px-2 py-1 shadow-none border-1">
                </div>

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$story->title}}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="5" rows="5" style="resize: none;">{{$story->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label id="content">Content</label>
                    <textarea name="content" class="form-control" cols="10" rows="10" style="resize: none;">{{$story->content}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>

@endsection