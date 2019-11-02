@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Date</th>
                                <th scope="col">Post Detaile</th>
                              </tr>
                            </thead>
                            <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td><a href="{{route('postdetaile',['id'=>$post->id])}}">detaile</a></td>
                                        </tr>

                                    @endforeach
                            </tbody>
                          </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
