@extends('app')

@section('title', '顯示特定球隊')

@section('cars_theme', '您所選取的球隊資料')

@section('cars_contents')
        車子編號：{{ $brand->id }}<br/>
        汽車品牌：{{ $brand->brand }}<br/>
        國家：{{ $brand->nationality }}<br/>
        創立時間：{{ $brand->time }}<br/>
        總部：{{ $brand->places }}<br/>
        創辦人：{{ $brand->ceo }}<br/>
@endsection