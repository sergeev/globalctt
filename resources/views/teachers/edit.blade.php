@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Редактирование педагога {{ $teacher->teacher_full_name }}
                    <a class="btn btn-primary float-right" href="{{ route('admin.teachers.index') }}"> Назад</a>
                </div>
                <div class="card-body">
                    @include('admin.errorsForm')
                    {!! Form::model($teacher, ['method' => 'PATCH','route' => ['admin.teachers.update', $teacher->id]])
                    !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Имя:</strong>
                                {!! Form::text('teacher_full_name', null, array('placeholder' => 'Имя','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Квантум:</strong>
                                {!! Form::text('teacher_kvantum', null, array('placeholder' => 'teacher_kvantum','class'
                                => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Примечание:</strong>
                                {!! Form::text('teacher_desc', null, array('placeholder' => 'teacher_desc','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection