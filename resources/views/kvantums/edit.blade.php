@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Редактирование Квантума {{ $kvantum->kvantum_name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.kvantums.index') }}"> Назад</a>
        </div>
    </div>
</div>


@include('admin.errorsForm')

        {!! Form::model($kvantum, ['method' => 'PATCH','route' => ['admin.kvantums.update', $kvantum->id]]) !!}
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Квантума:</strong>
                {!! Form::text('kvantum_id', null, array('placeholder' => '0','class' => 'form-control')) !!}
                <small class="form-text text-muted">ID квантума есть в квантумах</small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название:</strong>
                <!-- <input type="text" name="kvantum_name" class="form-control" placeholder="Название квантума"> -->
                {!! Form::text('kvantum_name', null, array('placeholder' => 'Название квантума','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> ID  педагога:</strong>
                {!! Form::text('kvantum_teacher_id', null, array('placeholder' => '1','class' => 'form-control')) !!}
                <small class="form-text text-muted">ID педагога есть в Педагогах</small>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Возраст:</strong>
                <!-- <input type="text" name="kvantum_age" class="form-control" placeholder="Возраст для приема"> -->
                {!! Form::text('kvantum_age', null, array('placeholder' => 'Возраст для приема','class' => 'form-control')) !!}
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Количество часов в программе:</strong>
                    {!! Form::text('kvantum_program_hours_count', null, array('placeholder' => '72','class' => 'form-control')) !!}
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Количество человек:</strong>
                <!-- <input type="text" name="kvantum_number_of_people_in_the_group" class="form-control" placeholder="Количество человек в 1 группе"> -->
                {!! Form::text('kvantum_number_of_people_in_the_group', null, array('placeholder' => 'Количество человек в 1 группе','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Описание:</strong>
                <!--  <textarea class="form-control" style="height:150px" name="kvantum_desc" placeholder="Описание квантума"></textarea> -->
                {!! Form::textarea('kvantum_desc', null, array('placeholder' => 'Описание квантума','class' => 'form-control')) !!}
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Расширенное описание :</strong>
                    {!! Form::textarea('kvantum_desc_full_txt', null, array('placeholder' => 'Описание более полное','class' => 'form-control')) !!}
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </div>
    {!! Form::close() !!}
    
    @endsection
