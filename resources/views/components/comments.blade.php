@extends('client.read')

@section('comment')
        @foreach ($comments as $comment)
        <div class="comment_item mb-3">
            <p class="read_comment_username dwhite_color">{{ $comment->user->username}}</p>
            <p class="read_comment_datetime dwhite_color">{{ $comment->created_at}}</p>
            <p class="read_comment_content">{{ $comment->comment }}</p>
        </div>
        @endforeach
@endsection