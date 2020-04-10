@extends('layouts.main')

@section('title','Hoodie Name')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="my-4 font-weight-bold">Hack Store</h1>
            <div class="list-group">
                <a href="#" class="list-group-item active">Hoodies</a>
                <a href="#" class="list-group-item disabled">T - Shirts</a>
                <a href="#" class="list-group-item disabled">Stickers</a>
                <a href="{{url('/product')}}" class="btn btn-primary">Back to All Products</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="{{asset('img/uploadedImages/'.$hoodies->image)}}" alt="">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">{{$hoodies->name}}</h3>
                    <div class="cost" style="display:flex; align-items:center">
                        <h5 class="font-weight-bold">
                            Rs. {{$hoodies->sellingPrice}}
                        </h5>
                        <small style="text-decoration:line-through;margin-left:10px;">
                            Rs. {{$hoodies->actualPrice}}
                        </small>
                    </div>
                    <p class="card-text">
                        {{$hoodies->description}}
                    </p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
                    <br><br>
                    <div class="row">
                        <div class="col">
                           {{-- {!! Form::open(['route'=>['cart.store',$hoodies->id]]) !!}
                                {!! Form::submit('Add to Cart', ['class'=>'btn btn-primary']) !!}
                           {!! Form::close() !!} --}}
                           <a href="{{url('add-to-cart/'.$hoodies->id)}}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
