@extends('layout')
@section('content')


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <br><br>
                <div class="row">
                    <div class="col-sm-8"><h2>Category <b>List</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">Edit</i></a>
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