@extends('layout')
@section('title') Главная страница @endsection
@section('main_content')
<div class="container">
<center>
<br>
        <div class="row">
        @foreach($movies as $el)
        <a class="col-md-3 col-sm-12 mb-sm-5 mb-sm-5 d-flex flex-column" href="/films/{{$el->id}}">
        <div>
                <h5 class="text-center">{{$el->name}}</h5>
                    <p><img class="hy"  width="250" height="350" 
                    src="{{ Storage::url($el->picture) }}" alt=""></p>
        </div>
        </a>
        @endforeach
      </div>
    </center>
    </div>


    <style scoped>
        * {
            transition: .5s ease;
            box-sizing: border-box;

        }
        .hy:hover {
            transform: scale(1.05);
            cursor: pointer;
        }
        .hy{
            border: 8px solid #000000;
            border-radius: 30px;
        }
        a {
    text-decoration: none;
    color: #FFFFFF;
   }
    </style>
@endsection