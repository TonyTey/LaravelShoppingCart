@extends('layout')
@section('content')

    <div class="row">
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"> Mobile Phone</h5>
                
                <img src="{{asset('images/H1002.png')}}" class="img-fluid" alt="">

                <div class="class-heading">Rm1099</div>

                <button class="btn btn-danger brn-xs">Add to cart</button>

            </div>
        </div>

        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">Mobile Phone</h5>

                <img src="{{asset('images/H1002.png')}}" class="img-fluid" alt="">

                <div class="class-heading">RM1099</div>

                <button class="btn btn-danger brn-xs">Add to cart</button>
            </div>

        </div>

        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">Mobile Phone</h5>

                <img src="{{asset('images/H1002.png')}}" class="img-fluid" alt="">

                <div class="class-heading">RM1099</div>

                <button class="btn btn-danger brn-xs">Add to cart</button>
            </div>

        </div>

    </div>
@endsection