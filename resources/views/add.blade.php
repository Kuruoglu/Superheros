@extends('layouts.app')

@section('content')

    <div class="container">
    <form action="{{route('hero.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('parts._form')
        </form>
    </div>
@endsection
