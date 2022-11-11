@extends('cars.app')
@section('cars_contents')
        列示所有車輛(使用foreach):<br/>
        @foreach($cars as $car)
            {{ $cars }} <br/>
        @endforeach
        <hr> 
@endsection