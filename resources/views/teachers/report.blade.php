@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добавление нового отчета наполняемости
                    <a class="btn btn-primary float-right" href="{{ route('home') }}"> Назад</a>
                </div>
                <div class="card-body">
                    @include('admin.errorsForm')
                    {!! Form::open(['route' => 'teacher.reports.store', 'method' => 'POST']) !!}

                    <div class="row">

                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Преподаватель:</strong>
                                {{ Form::select('teacher_full_name', $teachers, [], ['placeholder' => '', 'class' => 'form-control']) }}
                            </div>
                        </div> --}}

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Квантум:</strong>
                                {{ Form::select('inputsKvantum', $kvantums, [], ['placeholder' => '', 'class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Количество человек:</strong>
                                {!! Form::text('student_count', null, ['placeholder' => '14', 'class' => 'form-control',
                                'maxlength' => '2']) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Группа:</strong>
                                {{ Form::select('week_group_id', $timetables, [], ['placeholder' => '', 'class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="week_day_report">День недели формирования отчета:</label>
                            {{ Form::select('week_day_report', ['Понедельник' => 'Понедельник', 'Вторник' => 'Вторник', 'Среда' => 'Среда', 'Четверг' => 'Четверг', 'Пятница' => 'Пятница', 'Суббота' => 'Суббота', 'Воскресенье' => 'Воскресенье'], null, ['class' => 'form-control']) }}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Дата отправки отчета:</strong>
                                {!! Form::date('report_date_input', null, ['class' => 'form-control']) !!}
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