@extends('app')

@section('title', '建立表單')

@section('cars_theme', '建立車型的表單')

@section('cars_contents')
    新增車型表單
    {!! Form::open(['url' =>'brands/store']) !!}
    <div class="form-geoup">
        {!! Form::label('brand ',' 汽車品牌  ') !!}
        {!! Form::text('brand', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label(' nationality ',' 國家 ') !!}
        {!! Form::text('nationality  ', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label(' time ',' 創立時間  ') !!}
        {!! Form::text(' time ', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label(' places ',' 總部 ') !!}
        {!! Form::text(' places ', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label(' ceo ',' 創辦人 ') !!}
        {!! Form::text(' ceo ', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::submit("新增車型", ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection