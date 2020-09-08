@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Добавление нового педагога</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.teachers.index') }}"> Назад</a>
            </div>
        </div>
    </div>


@include('admin.errorsForm')

    {!! Form::open(array('route' => 'admin.teachers.store','method'=>'POST')) !!}
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Ф.И.О:</strong>
                     {!! Form::text('teacher_full_name', null, array('placeholder' => 'Сергеев Василий Александрович','class' => 'form-control')) !!}
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
                    <textarea class="form-control" style="height:150px" name="teacher_desc" placeholder="Detail"></textarea>
                </div>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Отправить</button>
		    </div>
		</div>

{!! Form::close() !!}

<p class="text-center text-primary"><small>+</small></p>
@endsection