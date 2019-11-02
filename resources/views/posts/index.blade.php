@extends('layouts.master')

@section('content')
<h3>All Posts</h3>
<div class=row>
    <div class="col-md-9">
        <div class="row">
            @foreach($posts as $post)

            <div class="col-md-4 mt-3">
                    <div class="card" style="width: 100%;">
                            <img src="{{asset('storage/images/'.$post->image)}}" class="card-img-top" alt="image" height="200px">
                            <div class="card-body">
                              <h5 class="card-title">Title:</h5>{{$post->title}}
                              <hr>
                              <h5 class="card-title">Created at:</h5>{{$post->created_at}}
                              <hr>
                                <a href="{{route('postdetaile',['id'=>$post->id])}}" class="btn btn-primary">Show Details</a>
                            </div>
                          </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-3 mt-3">
            <div class="card">
                    <div class="card-header">
                      Number of Posts
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{$number}}</h2>
                    </div>
                  </div>
        
    </div>




</div>
<br>
<div class="pag">
{{$posts->links()}}
</div>
@endsection