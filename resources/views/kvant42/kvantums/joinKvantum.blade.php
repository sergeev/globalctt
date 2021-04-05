<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация кванторианца</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

@include('kvant42.loader')

<!-- =======================================================
    Name: Kvantorium42 Novokuznetsk
    Author: v.sergeev.m@gmail.com
    Dev love for CTT family
  ======================================================= -->
</head>

<body>
@include('kvant42.header')
<main id="main">
    {{--TODO - WTF? 4 br?! fix this! --}}
    <br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Регистрация кванторианца
                        <a href="./"><button type = "buttor" class= "btn btn-primary float-right">Назад</button></a>
                </div>

                <div class="card-body">

                    @include('admin.errorsForm')

                    {!! Form::open(array('route' => '_join.store','method'=>'POST')) !!}
                    @csrf
                    <div class="row">
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
                                {!! Form::text('name_1_ot', null, array('placeholder' => 'Имя Отчество (ребенка)','class' => 'form-control')) !!}
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
                                {{ Form::select('inputsKvantum', $kvantums, null, array('class' => 'form-control')) }}
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
                                {{ Form::select('groupTime', $timetables, null, array('class' => 'form-control')) }}
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
</main>
</body>
<br>
@include('kvant42.footer')
@include('kvant42.preloader')
