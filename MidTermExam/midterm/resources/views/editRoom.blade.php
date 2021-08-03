@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Room</h3>
        <form method="POST", action="{{route('updateRoom')}}" enctype="multipart/form-data">
            @CSRF

            @foreach($rooms as $room)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$room->id}}">
            <div class="form-group">
                <label for="roomNo">Room No</label>
                <input type="text" class="form-control" id="roomNo" name="roomNo" value="{{$room->roomNo}}">
            </div>

            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="text" class="form-control" id="floor" name="floor" value="{{$room->floor}}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$room->type}}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" min="0" value="{{$room->price}}">
            </div>

            <div class="form-group">
                <label for="available">Available</label>
                <input type="text" class="form-control" id="available" name="available" value="{{$room->available}}">
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection