@extends('layouts.main')


@section('title','Hack Merch')



@section('content')

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{url('img\toUpload\indexbg.jpg')}}" alt="First slide"
                    style="height:500px; width:100%;object-fit:cover">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="font-weight-bold" style="text-shadow: 5px 5px 2px #2a2a2a">Design and Comfort
                        </h1>
                        <p style="text-shadow: 2px 2px 6px #2a2a2a">Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{url('img\toUpload\indexbg.jpg')}}" alt="Second slide"
                    style="height:500px; width:100%;object-fit:cover">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="font-weight-bold" style="text-shadow: 5px 5px 2px #2a2a2a">
                            Best Quality Product
                        </h1>
                        <p style="text-shadow: 2px 2px 6px #2a2a2a">Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{url('img\toUpload\indexbg.jpg')}}" alt="Third slide"
                    style="height:500px; width:100%;object-fit:cover">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="font-weight-bold" style="text-shadow: 5px 5px 2px #2a2a2a">
                            Affordable to Wear
                        </h1>
                        <p style="text-shadow: 2px 2px 6px #2a2a2a">Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
