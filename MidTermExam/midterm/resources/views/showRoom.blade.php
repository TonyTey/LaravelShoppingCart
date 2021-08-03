@extends('layout')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
@endif
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <br><br>
                <div class="row">
                    <div class="col-sm-8"><h2>Room <b>List</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room No</th>
                        <th>Floor</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Available</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->id}}</td>
                            <td>{{$room->roomNo}}</td>
                            <td>{{$room->floor}}</td>
                            <td>{{$room->type}}</td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->available}}</td>
                            <td>
                                <a href="{{ route('editRoom', ['id'=>$room->id]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">Delete</i></a>
                            </td>
                        </tr>  
                    @endforeach   
                </tbody>
            </table>
            <br><br>
        </div>
    </div>    


@endsection