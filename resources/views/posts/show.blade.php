@extends('dashboard.adminapp')
@section('content')

<div class="container">
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    <p><span><a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-warning">Edit</a> 
    </span>
    <span><form action="{{route('posts.destroy', ['post'=>$post->id])}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
    </form></span></p>
</div>

@endsection