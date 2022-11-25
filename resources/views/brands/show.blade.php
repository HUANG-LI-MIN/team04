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
<table>
        <tr>
            <th>編號</th>
            <th>車型</th>
            <th>品牌</th>
            <th>馬力</th>
            <th>CC數</th>
            <th>價錢(萬)</th>
            <th>變速系統</th>
            <th>座位</th>
        </tr>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->type }}</td>
                <td>{{ $car->brand->brand }}</td>
                <td>{{ $car->horsepower }}</td>
                <td>{{ $car->cc }}</td>
                <td>{{ $car->money }}</td>
                <td>{{ $car->variable_s }}</td>
                <td>{{ $car->seats}}</td>
            </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection