@extends('layouts.app')

@section('content')
    <div class="container">
       {{-- <div style="width: 50%; min-height: 500px" class="mx-auto">

       </div> --}}
       <div class="card  mx-auto" style="width: 50%;">
       <img src="{{$hero->img}}" class="card-img-top mx-auto" style="width: 300px" alt="{{$hero->name}}">
        <div class="card-body">
        <h5 class="card-title text-center">{{$hero->nickname}}</h5>
        <p class="card-text">{{$hero->catch_phrase}}</p>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Real name : {{$hero->real_name}}</li>
        <li class="list-group-item">Description: {{$hero->origin_description}}</li>
        <li class="list-group-item">Superposers : {{$hero->superpowers}}</li>
        </ul>
       
      </div>
    </div>
@endsection