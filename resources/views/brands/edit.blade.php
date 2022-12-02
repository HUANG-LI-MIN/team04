@extends('app')

@section('title', '建立表單')

@section('cars_theme', '建立車型的表單')

@section('cars_contents')
        {!! Form::open(['url' =>'brands/update']) !!}
    <div class="form-geoup">
        {!! Form::label('brand ',' 汽車品牌  ') !!}
        {!! Form::text('brand', $selectBid,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('nationality',' 國家 ') !!}
        {!! Form::text('nationality', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('time',' 創立時間  ') !!}
        {!! Form::date('time', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('places',' 總部 ') !!}
        {!! Form::text('places', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('ceo',' 創辦人 ') !!}
        {!! Form::text('ceo', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::submit("更新車型資料", ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection