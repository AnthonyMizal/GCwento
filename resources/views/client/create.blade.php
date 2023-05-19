@extends('layout.client')

@section('pageTitle', 'Create Story')

@section('client_cont')

    <div class="card create_story_form_container p-4">
        <div class="card_header_container">
            <h3 class="text-center form_header_text">CREATE STORY</h3>
            {{-- <div class="header_line"></div> --}}
        </div>

        <div class="card-body pt-3">
            <form action="/stories" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>

                <div class="mb-3 ">
                    <label class="input_label">Upload Cover</label>
                    <input type="file" name="cover" class="form-control upload_cover w-50 px-2 shadow-none border-1">
                </div>


                <div class="mb-3">
                    <label class="input_label">Title</label>
                    <input type="text" placeholder="Enter the story title here..." name="title" class="form-control form_input px-2 py-3">
                </div>
                
                <div class="form-group genre_container mb-3">
                    <label for="genres" class="input_label">Genres:</label>
                    <br>
                    
                    <div class="d-flex justify-content-center align-items-center">
                        @foreach($genres as $genre)
                            <div class="form-check px-4 d-flex justify-content-center align-items-center">
                                <input class="form-check-input genre_checkbox" type="checkbox" name="genres[]" value="{{ $genre->name }}" id="genre{{ $genre->id }}">
                                <label class="form-check-label genre_checkbox_label" for="genre{{ $genre->id }}">{{ $genre->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    
                </div>

            

                <div class="mb-3">
                    <label class="input_label">Description</label>
                    <textarea name="description" placeholder="Enter the brief story description here..." class="form-control form_input rounded-1 px-2 py-1" rows="3" style="resize: none;"></textarea>
                </div>

                <div class="mb-3">
                    <label id="content" class="input_label">Content</label>
                    <textarea name="content" placeholder="Enter the story contents here..." class="form-control form_input rounded-1 px-2 py-1" cols="10" rows="20" style="resize: none;"></textarea>
                </div>

                <button type="submit" class="btn submit_story_button rounded-5 w-25 py-2"> SUBMIT </button>
            </form>
        </div>
    </div>

@endsection