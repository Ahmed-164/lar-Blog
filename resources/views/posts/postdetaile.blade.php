@extends('layouts.master')
@section('content')
<div class="card" style="width: 100%;">
        <img src="{{ asset('storage/images/'.$post->image)}}" class="card-img-top" alt="image" height="500px">
        <div class="card-body">
          <h5 class="card-title">Post Title:</h5>{{$post->title}}<hr>
          <h5 class="card-title">Post Content:</h5>{{$post->content}}<hr>
          <h5 class="card-title">Created at:</h5>{{$post->created_at}}<hr>
          <h5 class="card-title">Post Owner:</h5>{{$post->user->name}}<hr>
          @auth
            @if(auth()->user()->id == $post->user_id)
            <a class="btn btn-primary float-left" href="{{route('editpost',['id'=>$post->id])}}">Update</a>
            <form method="POST" action="{{route('postdelete',['id'=>$post->id])}}">
                 @csrf
                 @method('DELETE')
                 <input type="submit" value="delete" class="btn btn-danger float-left ml-2">
            </form>
            @endif
          @endauth
        </div>
      </div>

@endsection