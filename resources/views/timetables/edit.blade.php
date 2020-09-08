@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Обновление расписания {{ $timetable->teacher_full_name }} {{ $timetable->kvantum_name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timetables.index') }}"> Назад</a>
            </div>
        </div>
    </div>


@include('errors.admin.errorsForm')

{!! Form::model($timetable, ['method' => 'PATCH','route' => ['timetables.update', $timetable->id]]) !!}
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Название урока "опционально":</strong>
                    {!! Form::text('topic', null, array('placeholder' => 'Урок лазерной резки','class' => 'form-control')) !!}
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
                    {!! Form::text('week_time', null, array('placeholder' => '9:30','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>*Группа:</strong>
                    {!! Form::text('week_group_id', null, array('placeholder' => 'Группа_1','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
		</div>
{!! Form::close() !!}

    <!-- </form> -->

<p class="text-center text-primary"><small>+</small></p>
@endsection