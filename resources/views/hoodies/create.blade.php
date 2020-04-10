@extends('layouts.main')

@section('title','Hoodies | Add New')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-md-8">
                <h1 class="font-weight-bold">Add a New Hoodie</h1>
            </div>
            <div class="col-md-4 ">
                <a href="{{route('hoodies.index')}}" class="btn btn-primary pull-right">
                    + View All Hoodies
                 </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            {!! Form::open(['route'=>'hoodies.store','files'=>'true']) !!}{{--filrs = true is same as enctype=multipart form data--}}
                {!! Form::label('name', 'Name of Hoodie:',['class'=>'font-weight-bold']) !!}
                {!! Form::text('name', '', ['class'=>'form-control','placeholder'=>'Name of Hoodie']) !!}
                <br>
                {!! Form::label('actualPrice', 'Actual Price:', ['class'=>'font-weight-bold']) !!}
                {!! Form::number('actualPrice', '', ['class'=>'form-control','placeholder'=>'2500']) !!}
                <br>
                {!! Form::label('sellingPrice', 'Selling Price:', ['class'=>'font-weight-bold']) !!}
                {!! Form::number('sellingPrice', '', ['class'=>'form-control','placeholder'=>'2500']) !!}
                <br>
                {!! Form::label('description', 'About this Hoodie:', ['class'=>'font-weight-bold']) !!}
                {!! Form::textarea('description', '', ['class'=>'form-control','style'=>'resize:none','placeholder'=>'Description of Hoodie']) !!}
                <br>
                {!! Form::label('image', 'Hoodie Image:', ['class'=>'font-weight-bold']) !!}
                {!! Form::file('image', ['class'=>'form-control']) !!}
                <br>
                {!! Form::submit('Add New Hoodie', ['class'=>'btn btn-success','style'=>'margin:10px 0']) !!}

            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
