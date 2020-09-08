@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Редактирование педагога {{ $teacher->teacher_full_name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Назад</a>
        </div>
    </div>
</div>


@include('errors.admin.errorsForm')


{!! Form::model($teacher, ['method' => 'PATCH','route' => ['teachers.update', $teacher->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Имя:</strong>
            {!! Form::text('teacher_full_name', null, array('placeholder' => 'Имя','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Квантум:</strong>
            {!! Form::text('teacher_kvantum', null, array('placeholder' => 'teacher_kvantum','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Примечание:</strong>
            {!! Form::text('teacher_desc', null, array('placeholder' => 'teacher_desc','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</div>
{!! Form::close() !!}

<p class="text-center text-primary"><small>+</small></p>
@endsection