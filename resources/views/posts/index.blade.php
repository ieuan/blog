@extends('posts.page')

@section('postsContent')

    @forelse($posts as $post)

        @include('posts.singleHead')

        <h6>{{ $post->created_at->format('l, dS F, Y') }}</h6>

        <div>
            {{ str_limit($post->body,150,'...') }}
        </div>

        <hr/>

    @empty

        @if($user)
            <h4>There are no posts to show, please <a href="{{ route('posts.create') }}">create</a> a new post</h4>
        @else
            <h4>There are currently no posts to show.</h4>
        @endif

    @endforelse

@endsection