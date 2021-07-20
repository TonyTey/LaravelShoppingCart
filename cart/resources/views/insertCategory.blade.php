@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Category</h3>
        <form method="POST", action="{{route('addCategory')}}">
            @CSRF
            <div class="form-group">
                <label for="Category name">Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection