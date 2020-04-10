@extends('layouts.main')

@section('title','Hoodies | Edit')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-md-8">
        <h1 class="font-weight-bold">Edit Hoodie: {{$hoodies->id}}</h1>
        </div>
        <div class="col-md-4 ">
            <a href="{{route('hoodies.index')}}" class="btn btn-primary pull-right">
                Cancel
             </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($hoodies,['route'=>['hoodies.update',$hoodies->id],'method'=>'PUT','files'=>'true']) !!}
                    {!! Form::label('name', 'Name of Hoodie', ['class'=>'font-weight-bold']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control','']) !!}
                    <br>
                    {!! Form::label('actualPrice', 'Actual Price of Hoodie', ['class'=>'font-weight-bold']) !!}
                    {!! Form::number('actualPrice', null, ['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('sellingPrice', 'Selling Price of Hoodie', ['class'=>'font-weight-bold']) !!}
                    {!! Form::number('sellingPrice', null, ['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('description', 'About this Hoodie:', ['class'=>'font-weight-bold']) !!}
                {!! Form::textarea('description', null, ['class'=>'form-control','style'=>'resize:none','placeholder'=>'Description of Hoodie']) !!}
                    <br>
                    {!! Form::label('image', 'Hoodie Image:', ['class'=>'font-weight-bold']) !!}
                    {!! Form::file('image', ['class'=>'form-control']) !!}
                    <br>

                    {!! Form::submit('Update Hoodie', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
