@extends('dashboard.adminapp')
@section('content')

<h3>Authors</h3>
@foreach($authors as $author)
<p>{{$author->profile->nickname}}</p>
@endforeach

<h3>Authors</h3>
@foreach($profiles as $profile)
<p>{{$profile->author->name}}</p>

@endforeach

@if(count($posts) < 1)
<h3> No Post Yet </h3>
@else
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title </th>
        <th scope="col">Body</th>
        <th scope="col">Action</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
       
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$n++}}</th>
            <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
            <td>{!!Str::limit($post->body,20)!!}</td>
            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-warning">Edit</a> 
                </td>
                <td><form action="{{route('posts.destroy', ['post'=>$post->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form></td>
          </tr>
        @endforeach
        
    </tbody>
  </table>
  @endif




  @endsection