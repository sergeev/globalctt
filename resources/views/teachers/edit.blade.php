@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Редактирование педагога {{ $teacher->teacher_full_name }}
                        <a class="btn btn-primary float-right" href="{{ route('admin.teachers.index') }}"> Назад</a>
                    </div>
                    <div class="card-body">
                        @include('admin.errorsForm')
                        {!! Form::model($teacher, ['method' => 'PATCH', 'route' => ['admin.teachers.update', $teacher->id]])
                        !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Присвоить уникальный ID: если оставить пустым -
                                        не назвачен(редактирование запрещено) [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: Teacher900540</strong>
                                        {!! Form::text('teacher_full_id', null, ['placeholder' => 'Присвоить уникальный ID, это будет ключь для проведения уникальных событий', 'class' =>
                                        'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на картинку Профиля: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: VK - >
                                            https://vk.com/images/deactivated_hid_200.gif</strong>
                                            {!! Form::text('link_images_1', null, ['placeholder' => 'Ссылка на картинку профиля', 'class' =>
                                            'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Имя:</strong>
                                    {!! Form::text('teacher_full_name', null, ['placeholder' => 'Имя', 'class' =>
                                    'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- TODO: Релизация не совсем верная, сравнение направления должно браться из kvanta == teacher_kvantum --}}
                                    <strong>Квантум:</strong>
                                    {!! Form::select('teacher_kvantum',['Хай-Тек' => 'Хай-Тек', 'Робоквантум' => 'Робоквантум', 'IT-квантум' => 'IT-квантум', 'Энерджиквантум' => 'Энерджиквантум', 'Наноквантум' => 'Наноквантум', 'VR/AR-квантум' => 'VR/AR-квантум', 'Шахматная гостиная' => 'Шахматная гостиная', 'Математика' => 'Математика', 'Английский язык' => 'Английский язык'], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Квантум ID:</strong>
                                    {{ Form::text('teacher_kvantum_id', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Примечание:</strong>
                                    {!! Form::textarea('teacher_desc', null, ['placeholder' => 'teacher_desc', 'class' =>
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
    </div>

@endsection
