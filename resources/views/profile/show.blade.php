@extends('layouts.app')

@section('content')
<style>

</style>
<div class='container  text-white'>
  <div class="card bg-dark border-white">
    <img style="  object-fit: cover;
            opacity: 30%;
            height: 400px;
            width: 100%; " class="backdrop card-img-top"  src="{{asset('backdrop/'.$prof->backdrop)}}">
    <center>
      <div class='xa text-white' style=" position: absolute;
            width: 100%;
            top: 100px;
            opacity: 80%;">
        <img class="rounded-circle bg-white border-white" style="object-fit: contain;" height="100" width="100" src="{{asset('avatar/'.$prof->avatar)}}">
        <div class=" bg-transparent">
          <h2>{{$prof->display_name}}</h2>
          <h7>{{$prof->bio}}</h7> <br>
          <h7>{{$prof->alamat}}</h7>

        </div>
        @if($you==$user->id) 
            <a href="/profile/edit" type="button" class="btn btn-sm btn-outline-secondary">Edit</a> 
          @endif 
      </div>
    </center>
  </div>

</div>
<div class="container bg-secondary text-white">
  <h2>
    Ini dia lapaknya {{$prof->display_name}}
  </h2>
</div>@include('layouts.grid')

@endsection