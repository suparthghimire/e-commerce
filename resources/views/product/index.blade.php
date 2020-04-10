@extends('layouts.main')
@section('title','All Hoodies')

@section('content')

<div class="text-center p-4">
    <h1>All Hoodies</h1>
</div>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            @foreach ($hoodies as $hoodie)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{asset('img/uploadedImages/'.$hoodie->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">{{$hoodie->name}}</h3>
                            <div class="cost" style="display:flex; align-items:center">
                                <h3 class="font-weight-bold">
                                    Rs. {{$hoodie->sellingPrice}}
                                </h3>
                                <small style="text-decoration:line-through;margin-left:10px;">Rs. {{$hoodie->actualPrice}}</small>
                            </div>
                            <div class="stars" style="padding-bottom:10px">
                                <i class="fas fa-star" style="color:#ffd30f;font-size:0.5rem"></i>
                                <i class="fas fa-star" style="color:#ffd30f;font-size:0.5rem"></i>
                                <i class="fas fa-star" style="color:#ffd30f;font-size:0.5rem"></i>
                                <i class="fas fa-star" style="color:#ffd30f;font-size:0.5rem"></i>
                                <i class="fas fa-star" style="color:#ffd30f;font-size:0.5rem"></i>
                            </div>
                            <p class="card-text">
                                {{$hoodie->description}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-container">
                                    <a href="{{url('product',$hoodie->id)}}" class="btn btn-md btn-primary" style="margin-right:10px">View</a>
                                </div>
                                <small class="text-muted">
                                    {{date('M j Y',strtotime($hoodie->created_at))}}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</main>
@endsection
