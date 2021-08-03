@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-2"></div>

        @foreach($products as $product)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="card-title">{{$product->name}}</h5>

                        <img src="{{asset('images/')}}/{{$product->image}}" class="img-fluid" alt="" width="80%">
                    </div>

                    <div class="col-md-9">
                        <br><br>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="card-heading">Quantity <input type="number" min="1" value="1" name="quantity" size="3">
                         Available: {{$product->quantity}}</div>
                        <br><br>
                        <div class="card-heading">RM {{$product->price}}</div>
                        <br>
                        <button class="btn btn-danger btn-xs">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-sm-4"></div>
    </div>
@endsection