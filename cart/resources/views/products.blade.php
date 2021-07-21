@extends('layout')
@section('content')

    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"> {{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <img src="{{asset('images/')}}/{{$product->image}}" class="img-fluid" alt="">
                <div class="class-heading">RM {{$product->price}}</div>
                <button class="btn btn-danger brn-xs">Add to cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection