@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Обновление расписания {{ $timetable->teacher_full_name }}
                    {{ $timetable->kvantum_name }}
                    <a class="btn btn-primary float-right" href="{{ route('admin.timetables.index') }}"> Назад</a>
                </div>


                @include('admin.errorsForm')

                {!! Form::model($timetable, ['method' => 'PATCH','route' => ['admin.timetables.update', $timetable->id]]) !!}
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Название урока "опционально":</strong>
                            {!! Form::text('topic', null, array('placeholder' => 'Урок лазерной резки','class' =>
                            'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>*Выбор педагога:</strong>
                            {{ Form::select('teacher_full_name', $teachers, [], array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>*Выбор направления обучения:</strong>
                            {{ Form::select('kvantum_name', $kvantums, [], array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="week_day">*День недели преподавания:</label>
                        {{ Form::select('week_day', ['Понедельник' => 'Понедельник', 'Вторник' => 'Вторник', 'Среда' => 'Среда', 'Четверг' => 'Четверг', 'Пятница' => 'Пятница', 'Суббота' => 'Суббота', 'Воскресенье' => 'Воскресенье', 'Событие' => 'Событие'], null, ['class' => 'form-control']) }}
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>*Время занятия:</strong>
                            {!! Form::text('week_time', null, array('placeholder' => '9:30','class' => 'form-control'))
                            !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>*Группа:</strong>
                            {!! Form::text('week_group_id', null, array('placeholder' => 'Группа_1','class' =>
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
@endsection