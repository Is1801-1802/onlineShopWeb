@extends('layouts.adminNav')
@section('title', 'Product List')
@section('content')
<br><br>
    <div class="container mt-5">
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{session('successMsg')}}
            </div>
        @endif
        <h3 class="mt-5">Products</h3>
        <table class="table" mt-5>
            <thead>
            <tr>
                <th>category_id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $el)
                <tr>
                    <td>{{$el->category_id}}</td>
                    <td>{{$el->name}}</td>
                    <td>{{$el->description}}</td>
                    <td><img src="{{$el->image}}" width="100px"></td>
                    <td>{{$el->price}}</td>
                    <td>
                        <button class="btn btn-dark btn-sm edit-cart"><a href="{{ route('edit', $el->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                        <form method="POST" id="delete-form- {{ $el->id }}" action="{{ route('delete', $el->id) }}" style="display: none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                        </form>
                        <button onclick="if (confirm('Are you sure to delete this field')){
                            event.preventDefault();
                            document.getElementById('delete-form- {{ $el->id }}').submit();
                        }
                        else {
                            event.preventDefault();
                        }"><i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
