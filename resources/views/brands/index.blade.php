@extends('app')

@section('title', '車子品牌')

@section('cars_theme', '車子品牌')

@section('cars_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('cars.index') }} ">所有車型</a>
        <a href="{{ route('brands.index') }} ">所有車型品牌</a>
        <a href="{{ route('brands.create') }} ">新增車型品牌</a>
        <a href="{{ route('brands.japan') }} ">日本車型</a>
        <a href="{{ route('brands.usa') }} ">美國車型</a>
        <a href="{{ route('brands.germany') }} ">德國車型</a>
        <a href="{{ route('brands.UK') }} ">英國車型</a>
        <a href="{{ route('brands.France') }} ">法國車型</a>
        <a href="{{ route('brands.Italy') }} ">義大利車型</a>
        <a href="{{ route('brands.Taiwan') }} ">台灣車型</a>
       
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
                <th>操作3</th>
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
                <td><a href="{{ route('brands.edit', ['id'=>$brand->id]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/brands/delete', ['id' => $brand->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table> 
    {{$brands->links()}}
@endsection