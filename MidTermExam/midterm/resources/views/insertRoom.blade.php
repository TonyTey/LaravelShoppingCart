@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Room</h3>
        <form method="POST", action="{{route('addRoom')}}" enctype="multipart/form-data">
            @CSRF

            <div class="form-group">
                <label for="roomNo">Room No</label>
                <input type="text" class="form-control" id="roomNo" name="roomNo">
            </div>

            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="text" class="form-control" id="floor" name="floor">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" min="0">
            </div>

            <div class="form-group">
                <label for="available">Available</label>
                <input type="text" class="form-control" id="available" name="available">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection