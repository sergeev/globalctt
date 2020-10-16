@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование студента {{ $student->name_1_ot }} {{ $student->surname_1_fam }}
                    <a href="{{ route('students.students.index') }}"><button type="buttor"
                            class="btn btn-primary float-right">Назад</button></a>
                </div>

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
<div class="row">
                    {!! Form::model($student, ['method' => 'PATCH','route' => ['students.students.update',
                    $student->id]]) !!}
                    
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#organization">Организация</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#student">Ученик</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#parents">Родители</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#misc">Разное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link table-danger" data-toggle="tab" href="#dangerZone">Опасная зона</a>
                          </li>
                      </ul>

                      <div class="tab-content">
                        <div class="tab-pane fade" id="organization">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Организация: </strong>
                                {{ Form::select('organization', array('0' => 'Меридиан', '1' => 'Кванториум', '2' => 'ИТКуб'), null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                          </div>
                        <div class="tab-pane fade show active" id="student">

                    

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
                                {{ Form::select('gender', ['0' => 'Девочка', '1' => 'Мальчик'], null, ['class' => 'form-control']) }}
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
                                {{ Form::select('inputsKvantum', $kvantums, ['1' => 'Хай-Тек', '2' => 'Робоквантум', '3' => 'IT-квантум', '4' => 'Энерджиквантум', '5' => 'Наноквантум', '6' => 'VR/AR-квантум', '7' => 'Шахматная гостиная', '8' => 'Математика'], array('class' => 'form-control')) }}
                            </div>
                        </div>

                        {{-- <option value="inputsKvantum" @if($kvantums->kvantum_name === 'Хай-Тек') selected @endif>
                            Хай-Тек</option> --}}

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Выбор педагога:</strong>
                                {{ Form::select('teacherName', $teachers, [], array('class' => 'form-control')) }}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>*Группа:</strong>
                                {{ Form::select('groupTime', $week_group_id, [], array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Проверен в ручную:</strong>
                                {{ Form::select('student_checked', ['0' => 'Не проверен', '1' => 'Проверен'], null, ['class' => 'form-control']) }}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Комментарий:</strong>
                                {{ Form::textarea('inputsComments', null, ['class' => 'form-control' ]) }}
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="parents">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>*ФИО родителя (законного представителя):</strong>
                                    {{ Form::text('inputsNameLegalRepresentative', null, ['class' => 'form-control', 'placeholder' => 'ФИО родителя (законного представителя):']) }}
                                </div>
                            </div>
    
    
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>*Телефон родителя (законного представителя):</strong>
                                    {{ Form::text('NameLegalRepresentativeTelephone', null, ['class' => 'form-control', 'placeholder' => '*+7-000-000-00-00', 'maxlength' => '16']) }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="misc">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ранг:</strong>
                                    {{ Form::select('student_rang', ['0' => 'Нет ранга', '1' => 'Резидент', '2' => 'MVP'], null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <strong>student_exp:</strong>
                                        {{ Form::text('student_exp', null, ['class' => 'form-control' ]) }}
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <strong>student_coin:</strong>
                                        {{ Form::text('student_coin', null, ['class' => 'form-control' ]) }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="dangerZone">
                            <div class="form-group col-md-4">
                                <strong>Удалить студента</strong>
                                {{ Form::select('student_deleted', ['0' => 'Действующий', '1' => 'Удален'], null, ['class' => 'form-control']) }}
                            </div>
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