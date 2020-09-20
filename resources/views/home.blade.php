@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
         @foreach ($heros as $item)
            <div class="col col-md-4 " >
                <div class="card mb-3" style="width: 18rem; min-height: 500px ">
                    <div class="position-relative">
                        <img src="{{$item->img}}" class="card-img-top " style="max-height:300px"  alt="{{$item->nickname}}">
                        <div>
                            <form action="{{route('hero.destroy', $item)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button  class="btn btn-light position-absolute fixed-bottom"
                                    style="background-color:transparent; border:none; color:#fff" title="Delete this picture"><i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <a href="{{route('hero.edit', $item)}}" class="btn btn-light position-absolute fixed-top"
                                style="background-color:transparent; border:none; right: 245px;color:#fff " title="Delete this picture"><i class="fa fa-edit"></i>
                            </a>

                        </div>
                    </div>

                    <div class="card-body">
                            <a href="{{route('hero.show', $item->id)}}">
                            <h5 class="card-title">{{$item->nickname}}</h5>
                        </a>
                    </div>
                   
                </div>
            </div>
        @endforeach
    </div>
    {{ $heros->links() }}
</div>

              
@endsection
