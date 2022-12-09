@extends('app')

@section('title', '編輯表單')

@section('cars_theme', '編輯車型的表單')

@section('cars_contents')
    @include('message.list')
    {!! Form::model($car, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CarsController@update', $car->id]]) !!}
    @include('cars.form', ['submitButtonText'=>"更新車型資料"])
    {!! Form::close() !!}
@endsection