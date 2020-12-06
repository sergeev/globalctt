@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Добавление нового расписания
                        <a class="btn btn-primary float-right" href="{{ route('admin.timetables.index') }}"> Назад</a>
                    </div>

                    <div class="card-body">

                        @include('admin.errorsForm')

                        {!! Form::open(['route' => 'admin.timetables.store', 'method' => 'POST']) !!}

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
                                {{ Form::select('kvantum_name', $kvantums, [], ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Выбор педагога:</strong>
                                {{ Form::select('teacher_full_name', $teachers, [], ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="week_day">*День недели преподавания:</label>
                            {{ Form::select('week_day', ['Понедельник' => 'Понедельник', 'Вторник' => 'Вторник', 'Среда' => 'Среда', 'Четверг' => 'Четверг', 'Пятница' => 'Пятница', 'Суббота' => 'Суббота', 'Воскресенье' => 'Воскресенье', 'Событие' => 'Событие'], null, ['class' => 'form-control']) }}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Время занятия:</strong>
                                {!! Form::text('week_time', null, ['placeholder' => '9:30', 'class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Группа:</strong>
                                {!! Form::text('week_group_id', null, [
                                'placeholder' => 'Группа 1 Сергеев.В.А
                                9:00',
                                'class' => 'form-control',
                                ]) !!}
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
