@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Добавление нового педагога
                        <a class="btn btn-primary float-right" href="{{ route('admin.teachers.index') }}"> Назад</a>
                    </div>
                    <div class="card-body">
                        @include('admin.errorsForm')
                        {!! Form::open(['route' => 'admin.teachers.store', 'method' => 'POST']) !!}

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Присвоить уникальный ID: если оставить пустым -
                                        не назвачен(редактирование запрещено) [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: Teacher900540</strong>
                                        <input type="text" name="teacher_full_id" class="form-control"
                                            placeholder="Присвоить уникальный ID, это будет ключь для проведения уникальных событий"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на картинку Профиля: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: VK - >
                                            https://vk.com/images/deactivated_hid_200.gif</strong>
                                        <input type="text" name="link_images_1" class="form-control"
                                            placeholder="Ссылка на картинку профиля"></textarea>
                                </div>
                            </div>

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на личный сайт: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">
                                            http://kvantorium-nvkz.ru/</strong>
                                        <input type="text" name="link_web_main" class="form-control"
                                            placeholder="Ссылка на личный сайт"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на соцсеть в facebook: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip"
                                            data-placement="right">https://www.facebook.com/</strong>
                                        <input type="text" name="link_web_facebook" class="form-control"
                                            placeholder="Ссылка на соцсеть в facebook"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на соцсеть в twitter: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip"
                                            data-placement="right">https://www.twitter.com/</strong>
                                        <input type="text" name="link_web_twitter" class="form-control"
                                            placeholder="Ссылка на соцсеть в twitter"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на соцсеть в skype: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">https://www.skype.com/</strong>
                                        <input type="text" name="link_web_skype" class="form-control"
                                            placeholder="Ссылка на соцсеть в skype"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на соцсеть в google: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip"
                                            data-placement="right">https://www.google.com/</strong>
                                        <input type="text" name="link_web_google" class="form-control"
                                            placeholder="Ссылка на соцсеть в google"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на соцсеть в vk: [?]</strong>
                                    <p>
                                        <strong data-toggle="tooltip" data-placement="right">https://vk.ru/</strong>
                                        <input type="text" name="link_web_vk" class="form-control"
                                            placeholder="Ссылка на соцсеть в vk"></textarea>
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ф.И.О:</strong>
                                    {!! Form::text('teacher_full_name', null, [
                                    'placeholder' => 'Сергеев Василий Александрович',
                                    'class' => 'form-control',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Квантум:</strong>
                                    {{ Form::select('teacher_kvantum', $kvantums, [], ['placeholder' => '', 'class' => 'form-control']) }}
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
                                    <textarea class="form-control" style="height:150px" name="teacher_desc"
                                        placeholder="Примечание"></textarea>
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
