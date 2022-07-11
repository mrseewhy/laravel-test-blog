@extends('dashboard.adminapp')
@section('content')
<h3 class="mb-5"> Edit a blog post </h3>
<form action="{{route('posts.update', ['post' => $post->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group mt-3 mb-5">
      <label for="title">Title</label>
      <input type="title" class="form-control" name="title" id="title" placeholder="enter blog title" value="{{$post->title}}">
      <p>@error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror</p>
    </div>
    
    <div class="form-group mb-5">
      <label for="body">Body</label>
      <textarea class="form-control tinymce-editor" name="body" id="body" rows="3" placeholder="enter blog body" >{!!$post->body!!}</textarea>
      <p>@error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror</p>
    </div>
    
    <div>
      <button type="submit" class="btn btn-secondary btn-sm btn-block">Edit Post</button>

    </div>
  </form>
@endsection
