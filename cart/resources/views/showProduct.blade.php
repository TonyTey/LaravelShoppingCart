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
                    <div class="col-sm-8"><h2>Product <b>List</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td width="10"><img src="{{ asset('images/') }}/{{$product->image}}" width="100%" alt="" class="img-fluid"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->categoryID}}</td>
                            <td>
                                <a href="{{ route('editProduct', ['id'=>$product->id]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
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