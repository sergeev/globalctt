@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Расписания педагога {{ $timetable->teacher_full_name }}
                    <a class="btn btn-primary float-right" href="{{ route('admin.timetables.index') }}"> Назад</a>
                </div>

                <div class="card-body">
                    @include('admin.errorsForm')

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            Название урока:<strong> {{ $timetable->topic }}</strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            Педагог:<strong> {{ $timetable->teacher_full_name }}</strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            Направление:<strong> {{ $timetable->kvantum_name }}</strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        День недели преподавания: <strong> {{ $timetable->week_day }}</strong>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            Время занятия:<strong> {{ $timetable->week_time }}</strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            Группа: <strong>{{ $timetable->week_group_id }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection