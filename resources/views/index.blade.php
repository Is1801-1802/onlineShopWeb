@extends('layouts.nav');
@section('title', 'Apple Store')
@section('content')
    <div id="demo" class="carousel slide mb-4 mt-3" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active"><center>
                    <img src="https://list-name.ru/wp-content/uploads/2019/12/apple-products-2018-100782368-large.jpg" alt="apple prod" width="1000px" height="600px"></center>
            </div>
            <div class="carousel-item"><center>
                    <img src="images/promo3.png" alt="apple prod" width="1000px" height="600px"></center>
            </div>
            <div class="carousel-item"><center>
                    <img src="https://storage.myseldon.com/news_pict_D5/D566C9878FC7BD17AC843AB1B4F4AE36" alt="apple prod" width="1000px" height="600px"></center>
            </div>
            <div class="carousel-item"><center>
                    <img src="https://geek.kz/wp-content/uploads/2019/12/apple-pre-black-friday-holiday-gift-guide-2018-1.jpg" alt="apple prod" width="1000px" height="600px"></center>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <center><h3>All Models</h3></center>
    <div class="container mt-2 mb-2">
        @foreach($data as $el)
            <div class="card mt-5">
                <img class="card-img-top" src="{{$el->image}}" alt="imac">
                <div class="card-body">
                    <h4 class="card-title">{{$el->name}}</h4>
                    <p class="card-text">{{$el->description}}</p>
                    <center><a href="{{url('/', $el->code)}}" class="btn btn-dark btn-block">{{$el->name}} products</a></center>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
