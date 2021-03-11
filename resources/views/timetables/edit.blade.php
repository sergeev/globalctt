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

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>*Организация: </strong>
                        {!! Form::select('organization', ['0' => 'Меридиан', '1' => 'Кванториум', '2' => 'ИТКуб'],
                        null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Название урока "опционально":</strong>
                        {!! Form::text('topic', null, ['placeholder' => 'Урок лазерной резки', 'class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>*Выбор направления обучения:</strong>
                        {!! Form::select('kvantum_name',['Хай-Тек' => 'Хай-Тек', 'Робоквантум' => 'Робоквантум', 'IT-квантум' => 'IT-квантум', 'Энерджиквантум' => 'Энерджиквантум', 'Наноквантум' => 'Наноквантум', 'VR/AR-квантум' => 'VR/AR-квантум', 'Шахматная гостиная' => 'Шахматная гостиная', 'Математика' => 'Математика', 'Английский язык' => 'Английский язык'], null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>*Выбор педагога:</strong>
                        {{-- Выбираем из базы данных преподавателей Ф.И.О и сравниваем с имеющимся в timetable --}}
                        {!! Form::select('teacher_full_name', ['' => $teachers ], null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">*День недели преподавания:</th>
                            <th scope="col">*Номер группы | *Время занятия:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Понедельник: {{ Form::select('week_day_1', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_1', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Вторник: {{ Form::select('week_day_2', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_2', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Среда: {{ Form::select('week_day_3', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_3', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Четверг: {{ Form::select('week_day_4', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_4', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Пятница: {{ Form::select('week_day_5', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_5', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Суббота: {{ Form::select('week_day_6', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_6', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Воскресенье: {{ Form::select('week_day_7', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            </th>
                            <td>Пример: 15:30 - 16:10 {!! Form::textarea('week_time_day_7', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>*Группа:</strong>
                        {!! Form::text('week_group_id', null, ['placeholder' => 'Группа 1 Сергеев.В.А 9:00','class' => 'form-control',]) !!}
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
