@extends('layouts.adminNav')
@section('title', 'Add Products')
@section('content')
    <div class="container mt-2">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>
    <div class="container mt-5">
        <h3>Add Product</h3>
        <form action="{{route('store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="category_id">category_id:</label>
                <input type="category_id" class="form-control" id="category_id" placeholder="Enter category_id" name="category_id">
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="description" class="form-control" id="description" placeholder="Enter description" name="description">
            </div>
            <div class="form-group">
                <label for="image">Image Source:</label>
                <input type="photo" class="form-control" id="image" placeholder="Enter image source" name="image">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    @endsection
