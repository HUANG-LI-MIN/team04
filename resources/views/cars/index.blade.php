@extends('app')

@section('title', '車子規格')

@section('cars_theme', '車子規格')

@section('cars_contents')
   <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('cars.index') }} ">所有車型</a>
        <a href="{{ route('brands.index') }} ">所有車型品牌</a>
        <a href="{{ route('cars.create') }} ">新增車型</a>
        <a href="{{ route('cars.senior') }} ">名貴車型</a>
        <form action="{{ url('cars/model') }}" method='POST'>
            {!! Form::label('pos', '選取位置：') !!}
            {!! Form::select('pos', $models, ['class' => 'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢" />
            @csrf
    </div>
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
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
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
                
                <td><a href="{{ route('cars.show', ['id'=>$car->id]) }}">顯示</a></td>
                <td><a href="{{ route('cars.edit', ['id'=>$car->id]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/cars/delete', ['id' => $car->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </form>
                </td>
            </tr>
        @endforeach
    </table>
    @if ($showPagination)
    {{ $cars->links() }}
    @endif
@endsection