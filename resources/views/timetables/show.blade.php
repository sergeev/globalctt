@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Расписания педагога {{ $timetable->teacher_full_name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timetables.index') }}"> Назад</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

         <div class="row">
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

    <!-- </form> -->

<p class="text-center text-primary"><small>+</small></p>
@endsection