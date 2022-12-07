@extends('app')

@section('title', '建立表單')

@section('cars_theme', '建立車型的表單')

@section('cars_contents')
    {!! Form::open(['url' =>'brands/store']) !!}
    @include('brands.form', ['submitButtonText'=>"新增車型資料"])
    {!! Form::close() !!}
@endsection