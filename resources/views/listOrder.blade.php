@extends('layouts.adminNav')
@section('title', 'Orders')
@section('content')
    <div class="container mt-5">
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{session('successMsg')}}
            </div>
        @endif
        <h3 class="mt-5">Orders</h3>
        <table class="table" mt-5>
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone Number</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->fullname}}</td>
                    <td>{{$el->address}}</td>
                    <td>{{$el->email}}</td>
                    <td>{{$el->telNum}}</td>
                    <td>{{$el->total}} tg</td>
                    <td>
                        <form method="POST" id="delete-form- {{ $el->id }}" action="{{ route('deleteOrder', $el->id) }}" style="display: none">
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
                        <a href="{{ route('mail', $el->id) }}" class="btn btn-dark" role="button"><i class="fas fa-envelope"></i></a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
