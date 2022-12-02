@extends('app')

@section('title', '建立表單')

@section('cars_theme', '建立車型的表單')

@section('cars_contents')
    新增車型表單
    {!! Form::open(['url' =>'cars/update']) !!}
    <div class="form-geoup">
        {!! Form::label('type','車型') !!}
        {!! Form::text('type', $car->type,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('bid','品牌') !!}
        {!! Form::select('bid', $brands, $selectBid,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('horsepower','馬力') !!}
        {!! Form::text('horsepower',$car->horsepower,['class' => 'form-control']) !!} 
    </div>
    <div class="form-geoup">
        {!! Form::label('cc','cc數') !!}
        {!! Form::text('cc', $car->cc,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('money','價錢') !!}
        {!! Form::text('money', $car->money,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('variable_s','變速系統') !!}
        {!! Form::text('variable_s', $car->variable_s,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('seats','座位') !!}
        {!! Form::text('seats', $car->seats,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::submit("更新車型資料", ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection