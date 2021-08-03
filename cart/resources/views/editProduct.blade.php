@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Product</h3>
        <form method="POST", action="{{route('updateProduct')}}" enctype="multipart/form-data">
            @CSRF

            @foreach($products as $product)
            <input type="hidden" class="form-control" id="id" name="id" value="{{$product->id}}">
            <div class="form-group">
                <img src="{{asset('image/')}}/{{$product->image}}" alt="" width="200"><br>
                <label for="Category name">Name</label>
                <input type="text" class="form-control" id="productName" name="productName" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="Category description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
            </div>

            <div class="form-group">
                <label for="Category price">Price</label>
                <input type="number" class="form-control" id="price" name="price" min="0" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="Category image">Image</label>
                <input type="file" class="form-control" id="product-image" name="product-image">
            </div>

            <div class="form-group">
                <label for="Category quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" min="0" value="{{$product->quantity}}">
            </div>

            <div class="form-group">
                <label for="Category ID">Category ID</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}"
                            @if($product-> categoryID==$category->id)    
                                selected

                            @endif
                        >{{$category->name}}</option>

                    @endforeach

                </select>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection