@extends('app')

@section('title', '顯示特定車型')

@section('nba_theme', '您所選取的車型資料')

@section('nba_contents')
          顯示單一車型的視圖(view)
        車子編號：{{ $car->id }}<br/>
        車子型號：{{ $car->type }}<br/>
        車子品牌：{{ $car->bid }}<br/>
        車子馬力：{{ $car->horsepower }}<br/>
        車子CC數：{{ $car->cc }}<br/>
        車子價錢(萬)：{{ $car->money }}<br/>
        車子變速系統 : {{ $car->variable_s }}<br/>
        車子座位 : {{ $car->seats}}<br/>
 @endsection
