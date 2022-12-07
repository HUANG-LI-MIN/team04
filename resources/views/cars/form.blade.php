    <div class="form-geoup">
        {!! Form::label('type','車型') !!}
        {!! Form::text('type', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('bid','品牌') !!}
        {!! Form::select('bid', $brands,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('horsepower','馬力') !!}
        {!! Form::text('horsepower', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('cc','cc數') !!}
        {!! Form::text('cc', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('money','價錢') !!}
        {!! Form::text('money', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('variable_s','變速系統') !!}
        {!! Form::text('variable_s', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::label('seats','座位') !!}
        {!! Form::text('seats', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-geoup">
        {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
    </div>