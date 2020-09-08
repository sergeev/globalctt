@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Student </div>

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>ВНИМАНИЕ!</strong> Возникли проблемы в заполнении формы.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::open(array('route' => 'students.students.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Организация: </strong>
                                {!! Form::select('organization', array('0' => 'Меридиан', '1' => 'Кванториум', '2' =>
                                'ИТКуб'), null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Номер сертификата ПФДО:</strong>
                                {!! Form::text('inputsCertificate', null, array('placeholder' => '0000000000','class' =>
                                'form-control', 'maxlength' => '10')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Имя Отчество (ребенка):</strong>
                                {!! Form::text('name_1_ot', null, array('placeholder' => 'Имя Отчество
                                (ребенка)','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Фамилия (ребенка):</strong>
                                {!! Form::text('surname_1_fam', null, array('placeholder' => 'Фамилия (ребенка)','class'
                                => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Эл.почта:</strong>
                                {!! Form::email('inputEmail', null, array('placeholder' => 'Эл.почта','class' =>
                                'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Дата рождения:</strong>
                                {!! Form::date('childDateInput', null, array('placeholder' => 'Дата рождения','class' =>
                                'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Пол:</strong>
                                {!! Form::select('gender', ['0' => 'Девочка', '1' => 'Мальчик'], null, ['class' =>
                                'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Учебное заведение:</strong>
                                {!! Form::text('inputsSchool', null, array('placeholder' => 'МАОУ СОШ № 81','class' =>
                                'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Класс:</strong>
                                {!! Form::text('inputsClass', null, array('placeholder' => '6A','class' =>
                                'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Выбор направления обучения:</strong>
                                {{ Form::select('inputsKvantum', $kvantums, [], array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Выбор педагога:</strong>
                                {{ Form::select('teacherName', $teachers, [], array('class' => 'form-control')) }}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Группа:</strong>
                                {{ Form::select('groupTime', $timetables, [], array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*ФИО родителя (законного представителя):</strong>
                                {!! Form::text('inputsNameLegalRepresentative', null, ['class' => 'form-control',
                                'placeholder' => 'ФИО родителя (законного представителя):']) !!}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Телефон родителя (законного представителя):</strong>
                                {!! Form::text('NameLegalRepresentativeTelephone', null, ['class' => 'form-control',
                                'placeholder' => '*+7-000-000-00-00', 'maxlength' => '16']) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Комментарий:</strong>
                                {!! Form::textarea('inputsComments', null, ['class' => 'form-control' ]) !!}
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
</div>
@endsection