
@extends('layout')
@section('data')
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->contents }}</td>
            @foreach($comments as $comment)
                <td>{{ $comment->content }}</td>
            @endforeach
        </tr>
    @endforeach

@endsection
