@extends('layout')
@section('content')

    <div class="row">
        @foreach($rooms as $room)
        <div class="col-sm-4">
            <div class="room-body">
                <h5 class="room-title">Room No:{{$room->roomNo}}</h5>
                <p class="room-text">Floor :{{$room->floor}}</p>
                <p class="room-text">Type :{{$room->type}}</p>
                <p class="room-text">Avaible :{{$room->available}}</p>
                <div class="class-heading">RM {{$room->price}}</div>
                <button class="btn btn-danger brn-xs">Booking</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection