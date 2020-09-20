@extends('layouts.app')

@section('content')

    <div class="container">
        <form action={{route('hero.update', $hero)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('parts._form')
        </form>
    </div>
@endsection
