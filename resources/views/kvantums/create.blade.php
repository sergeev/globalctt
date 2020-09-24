@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добавить новый Квантум
                    <a class="btn btn-primary float-right" href="{{ route('admin.kvantums.index') }}"> Назад</a>
                </div>
                <div class="card-body">
                    @include('admin.errorsForm')
                    {!! Form::open(array('route' => 'admin.kvantums.store','method'=>'POST')) !!}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ID Квантума:</strong>
                            {!! Form::text('kvantum_id', null, array('placeholder' => '0','class' => 'form-control'))
                            !!}
                            <small class="form-text text-muted">ID квантума есть в квантумах</small>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Название:</strong>
                            {!! Form::text('kvantum_name', null, array('placeholder' => 'Название квантума','class' =>
                            'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> ID педагога:</strong>
                            {!! Form::text('kvantum_teacher_id', null, array('placeholder' => '1','class' =>
                            'form-control')) !!}
                            <small class="form-text text-muted">ID педагога есть в Педагогах</small>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Возраст:</strong>
                            {!! Form::text('kvantum_age', null, array('placeholder' => 'Возраст для приема','class' =>
                            'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Количество часов в программе:</strong>
                            {!! Form::text('kvantum_program_hours_count', null, array('placeholder' => '72','class' =>
                            'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Количество человек:</strong>
                            {!! Form::text('kvantum_number_of_people_in_the_group', null, array('placeholder' =>
                            'Количество
                            человек в 1 группе','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Описание:</strong>
                            {!! Form::textarea('kvantum_desc', null, array('placeholder' => 'Описание квантума','class'
                            =>
                            'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Описание расширенное:</strong>
                            {!! Form::textarea('kvantum_desc_full_txt', null, array('placeholder' => 'Описание более
                            полное','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>*Статус квантума:</strong>
                            {!! Form::select('kvantum_status', ['0' => 'Квантум закрыт', '1' => 'Квантум открыт'], null,
                            ['class' =>
                            'form-control']) !!}
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