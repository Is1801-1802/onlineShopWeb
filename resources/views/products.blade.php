@extends('layouts.nav')
@section('title', 'Apple Products')
@section('content')
    @isset($category)
        <div class="container mt-4">
            <center><h3>{{$category->name}} products</h3></center><br>
            @foreach($category->products as $product)
                <div class="card">
                    <center><img class="card-img-top" src="{{$product->image}}" style="width:250px"></center>
                    <div class="card-body text-center">
                        <h3 class="card-title">{{$product->name}}</h3><hr>
                        <p class="card-text">{{$product->description}} </p><hr>
                        <h4 class="card-text">{{$product->price}} tg</h4><br>
                        <form action="#" method="POST">
                            <center><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-dark btn-block" role="button">Add to cart</a></center>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <center><a href="{{url('/')}}" class="btn btn-dark">Go Back</a></center>
    @endisset
@endsection
