<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME','Best-Blog')}}</title>
    <link rel='stylesheet' href="{{asset('css/all.min.css')}}" type="text/css">
    <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel='stylesheet' href="{{asset('css/style.css')}}" type="text/css">

</head>
<body>
@include('includes.navbar')
@include('includes.messages')
<div class="container mt-3">
        @yield('content')

</div>






<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>

