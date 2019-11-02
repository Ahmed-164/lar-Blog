@if($errors->any())

<div class='alert alert-danger m-2'>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

</div>

@endif

@if(session('status'))
<div class='alert alert-success m-2'>
   {{session('status')}}
</div>
@endif

@if(session('error'))
<div class='alert alert-danger m-2'>
   {{session('error')}}
</div>
@endif