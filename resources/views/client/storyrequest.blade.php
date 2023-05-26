@extends('layout.client')
@section('pageTitle', 'Accessibility Request')

@section('client_cont')

@auth
    <div class="mystories_whole_container rounded-3 pt-4 px-5 mt-4">

    
        <div class="card_header_container">
            <h3 class="text-center form_header_text">STORIES REQUEST</h3>
        </div>

        <div class="row d-flex flex-row mx-1 my-4">
            <div class="col-10 search_filter_container d-flex align-items-centers">
                <div class="col-4 form-group d-flex rounded-5 py-1 px-3 bg-white shadow">
                    <i class="m-3 fa fa-search form_input_icon bpurple_highlighter"></i>
                    <input type="text" class="form-control shadow-none border-0 normal_text bg-transparent search_story_input" id="search_request_story" placeholder="Search story title here...">
                </div>
        
            </div>  
            
        
        </div>
        
        <div class="container-fluid">

            <table id="request_table_contents" class="table table-dark mystories_table">
                <thead>
                  <tr>
                    <th scope="col-4">TITLE</th>
                    <th scope="col-1">USER</th>
                    <th scope="col-1">STATUS</th>
                    <th scope="col-1">CREATED</th>
                    <th scope="col-1" class="table_top_right">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>

                {{-- Individual My Stories --}}
                @foreach ($story_requests as $story_request)
                    <tr>
                        <td class="mystories_story_title">{{ $story_request->story->title}}</td>
                        <td>{{ $story_request->reader->fullname}}</td>
                        <td>{{ $story_request->status}}</td>
                        <td>{{ $story_request->created_at}}</td>
                        <td>

                            @if($story_request->status == 'Approved')
                                <button type="button" class="mystories_delete_button border-0 text-decoration-none px-3 py-1 rounded-1" onclick="rejectRequest({{$story_request->id}})">REJECT</button>
                             @else 
                                <button type="button" class="mystories_approve_button border-0 text-decoration-none px-3 py-1 rounded-1" onclick="approveRequest({{$story_request->id}})">APPROVE</button>
                                <button type="button" class="mystories_delete_button border-0 text-decoration-none px-3 py-1 rounded-1" onclick="rejectRequest({{$story_request->id}})">REJECT</button>
                            
                            @endif

                        </td>
                    </tr>
                @endforeach

                </tbody>
              </table>
        </div>
    </div>

@endauth
@endsection