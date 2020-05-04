@extends('layouts.adminNav')
@section('title', 'Category List')
@section('content')
<br><br>
<div class="container mt-5">
    <h3>Category</h3>
    <table class="table table-striped" mt-5>
        <thead>
        <tr>
            <th>category_id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $el)
            <tr>
                <td>{{$el->id}}</td>
                <td>{{$el->name}}</td>
                <td>
                    <button class="btn btn-dark btn-sm edit-cart"><a href="{{ route('editc', $el->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <form method="POST" id="delete-form- {{ $el->id }}" action="{{ route('deletec', $el->id) }}" style="display: none">
                        {{csrf_field()}}
                        {{method_field('deletec')}}
                    </form>
                    <button onclick="if (confirm('Are you sure to delete this field')){
                        event.preventDefault();
                        document.getElementById('delete-form- {{ $el->id }}').submit();
                        }
                        else {
                        event.preventDefault();
                        }"><i class="fa fa-trash-o"></i>
                    </button>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
