@extends('posts.page')

@section('postsContent')

    <h3>Update Post</h3>
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Post Form -->
    <form action="{{ route('posts.update',['id'=>$post->id]) }}" method="POST" class="form-horizontal">
    {!! csrf_field() !!}
        <input type="hidden" id="id" name="id" value="{{ $post->id }}" />
        <input type="hidden" id="_method" name="_method" value="PUT" />

    <!-- Post Title -->
        <div class="form-group">
            <label for="post-title" class="col-sm-3 control-label">Post Title</label>

            <div class="col-sm-6">
                <input type="text" name="title" id="post-title" class="form-control" value="{{ $post->title }}">
            </div>
        </div>

        <div class="form-group">
            <label for="post-body" class="col-sm-3 control-label">Post Body</label>

            <div class="col-sm-6">
                <textarea name="body" id="post-body" class="form-control">{{ $post->body }}</textarea>
            </div>
        </div>

        <!-- Create Post Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Update Post
                </button>
            </div>
        </div>
    </form>
@endsection