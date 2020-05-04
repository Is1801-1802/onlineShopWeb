@extends('layouts.adminNav')
@section('title', 'Edit')
@section('content')
    <div class="container mt-2">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>
    <div class="container mt-5">
        <h3>Edit Product</h3>
        <form action="{{route('updatec', $data->id)}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="name" class="form-control" id="name"  value="{{$data->name}}" placeholder="Enter name" name="name">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
