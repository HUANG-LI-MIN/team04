@extends('app')

@section('title', '車子品牌')

@section('cars_theme', '車子品牌')

@section('cars_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('brands.index') }} ">所有車型</a>
    </div>
    <table>
            <tr>
                <th>編號</th>
                <th>汽車品牌</th>
                <th>國家</th>
                <th>創立時間</th>
                <th>總部</th>
                <th>創辦人</th>
                <th>操作1</th>
                <th>操作2</th>
            </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->brand }}</td>
                <td>{{ $brand->nationality }}</td>
                <td>{{ $brand->time }}</td>
                <td>{{ $brand->places }}</td>
                <td>{{ $brand->ceo }}</td>
                <td><a href="{{ route('brands.show', ['id'=>$brand->id]) }}">顯示</a></td>
                <td><a href="{{ route('brands.destroy', ['id'=>$brand->id]) }}">刪除</a></td>
            </tr>
        @endforeach
    </table> 
@endsection