@extends('layouts.master')

@section('content')
<p class="h2">Add Post</p>
<form class="border m-5 p-4" method="POST" action="{{route('storepost')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Tilte</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the Title of Post" name='title'>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Enter the Content of Post" name='content'></textarea>
    </div>
    <div class="custom-file">
            <input type="file" class="custom-file-input" name='image'>
            <label class="custom-file-label">Choose Image...</label>
    </div>
   
    <button type="submit" class="btn btn-primary mt-3">Add</button>
  </form>
@endsection