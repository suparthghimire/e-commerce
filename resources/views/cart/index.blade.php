@extends('layouts.main')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="font-weight-bold">
                Your Cart
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table border">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $count = 1;
                        ?>
                        @if(session('cart'))
                            @foreach (session('cart') as $id=>$details)
                                <?php $total+=$details['price']*$details['quantity']?>
                                <tr>
                                    <td class="font-weight-bold">{{$count}}.</td>
                                    <td class="name-img-td">
                                        <img src="{{asset('img/uploadedImages/'.$details['image'])}}" alt="" class="all-hoodie-img">
                                        <h6 class="font-weight-bold text-dark" style="margin-left:10px">
                                            {{$details['name']}}
                                        </h6>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold">
                                            {{-- <a href="#" class="btn btn-sm btn-primary" id="plus">+</a> --}}
                                                {{$details['quantity']}}
                                            {{-- <a href="#" class="btn btn-sm btn-primary" id="minus">-</a> --}}

                                        </p>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold">
                                            {{$details['price']}}
                                        </p>
                                    </td>
                                    <td>
                                        {{-- <a href="{{route('cart.remove',$details['id'])}}" class="btn btn-danger">Remove</a> --}}
                                    </td>
                                </tr>
                                <?php $count++ ?>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="font-style:italic; font-weight:bold" class="text-center text-danger p-4 alert alert-danger" >
                    Something you Dont want in Cart? Remove it!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="font-weight-bold">
                    Your Total: Rs. {{$total}}
                </p>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-danger float-right">
                    Clear Cart
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-success">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </div>
@endsection
