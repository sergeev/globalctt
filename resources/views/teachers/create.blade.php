@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добавление нового педагога
                    <a class="btn btn-primary float-right" href="{{ route('admin.teachers.index') }}"> Назад</a>
                </div>
                <div class="card-body">
                    @include('admin.errorsForm')
                    {!! Form::open(array('route' => 'admin.teachers.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ф.И.О:</strong>
                                {!! Form::text('teacher_full_name', null, array('placeholder' => 'Сергеев Василий
                                Александрович','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Квантум:</strong>
                                {{ Form::select('teacher_kvantum', $kvantums, [], array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Примечание:</strong>
                                <textarea class="form-control" style="height:150px" name="teacher_desc"
                                    placeholder="Примечание"></textarea>
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