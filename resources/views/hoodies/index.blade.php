@extends('layouts.main')

@section('title','Hoodies | All')

@section('stylesheet')
    <link rel="stylesheet" href="{{url('css\footer.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-md-8">
                <h1 class="font-weight-bold">All Hoodies In the Database</h1>
            </div>
            <div class="col-md-4 ">
                <a href="{{route('hoodies.create')}}" class="btn btn-primary pull-right">
                    + Add New Hoodie
                 </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actual Price</th>
                        <th>Selling Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($hoodies as $hoodie)
                            <tr>
                                <td>
                                    {{$hoodie->id}}
                                </td>
                                <td>
                                    <a href="" class="name-img-td">
                                        <img src="{{asset('img/uploadedImages/'.$hoodie->image)}}" alt="" class="all-hoodie-img">
                                        <h6 class="font-weight-bold text-dark" style="margin-left:10px">
                                            {{$hoodie->name}}
                                        </h6>
                                    </a>
                                </td>
                                <td>
                                    <p class="font-weight-bold" style="margin-top:10px">
                                        {{$hoodie->description}}
                                    </p>
                                </td>
                                <td>
                                    <p class="font-weight-bold" style="margin-top:10px">
                                        {{$hoodie->actualPrice}}
                                    </p>
                                </td>
                                <td>
                                    <p class="font-weight-bold" style="margin-top:10px">
                                        {{$hoodie->sellingPrice}}
                                    </p>
                                </td>
                                <td>
                                    <a href="{{route('hoodies.show',$hoodie->id)}}" class="btn btn-primary btn-block">View</a>
                                    <a href="{{route('hoodies.edit',$hoodie->id)}}" class="btn btn-warning btn-block">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
