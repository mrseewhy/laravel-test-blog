@extends('dashboard.adminapp')
@section('content')
    <h3 class="mb-5"> Create a new blog post </h3>
    <form action="{{route('posts.store')}}" method="post">
      @csrf
        <div class="form-group mt-3 mb-5">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="enter blog title" value="{{old('title')}}">
          <p>@error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror</p>
        </div>
        
        <div class="form-group mb-5">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3" placeholder="enter blog body" >{{old('body')}}</textarea>
          <p>@error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror</p>
        </div>
        
        <div>
          <button type="submit" class="btn btn-secondary btn-sm btn-block">Save Post</button>

        </div>
      </form>
@endsection