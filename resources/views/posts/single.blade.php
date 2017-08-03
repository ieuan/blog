@extends('posts.page')

@section('postsContent')

    @include('posts.singleHead')

    <h6>{{ $post->created_at->format('l, dS F, Y') }}</h6>

    <div>
        {!! nl2br(e($post->body)) !!}
    </div>
@endsection