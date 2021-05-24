@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добавить событие
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type="buttor"
                            class="btn btn-primary float-right">Назад</button></a>
                    @endcan
                </div>
                <div class="card-body">
                @include('admin.errorsForm')
                    <form action="{{ route('events.events.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Максимальная длина заголовка 300 символов">Заголовок: [?]</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Заголовок">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Ссылка на картинку вне сайта">Ссылка на картинку: [?]</strong>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: https://sun4-10.userapi.com/oZh9C3MMINcce-71h7kZOoX4ZdFwysPVQlCHhA/HxOM3b1WNQ0.jpg</strong>
                                    <input type="text" name="link_images_1" class="form-control" placeholder="Ссылка на картинку вне сайта">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Максимальная длина контента 300 символов">Контент: [?]</strong>
                                    <textarea class="form-control" style="height:150px" name="content_main_page"
                                        placeholder="Привью на главной и слайдере"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong data-toggle="tooltip" data-placement="right"
                                        title="Максимальная длина контента 5000 символов">Контент: [?]</strong>
                                    <textarea class="form-control tinymce-editor" style="height:150px" name="content"
                                        placeholder=""></textarea>
                                </div>
                            </div>
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Автор:</strong>
                                    {{ Form::select('author', $users, [], array('class' => 'form-control')) }}
                                </div>
                            </div> --}}

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="organization_show">
                                        <option selected>Выберите</option>
                                        <option value="0">Меридиан</option>
                                        <option value="1">Кванториум</option>
                                        <option value="2">ИТКуб</option>
                                        <option value="10">Нет</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="organization_show">Организация</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="published">
                                        <option selected>Выберите</option>
                                        <option value="1">Опубликовать</option>
                                        <option value="0">Нет</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="published">{{ trans('event.publish') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="published_slider_status">
                                        <option selected>Выберите</option>
                                        <option value="1">Опубликовать</option>
                                        <option value="0">Нет</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="published_slider_status">{{ trans('event.slider') }}</label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Дата начала публикации:</strong>
                                    {!! Form::date('published_date_start', null, array('placeholder' => 'Дата начала публикации','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Дата конца публикации:</strong>
                                    {!! Form::date('published_date_end', null, array('placeholder' => 'Дата конца публикации','class' =>
                                    'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    {{-- <select name="published[]" id="published" class="form-control" multiple>
                                        @foreach($event->includes->get('published') as $option)
                                            <option value="{{ $option->id }}" {{ (collect(old('options'))->contains($option->id)) ? 'selected':'' }}>{{ $option->name }}</option>
                                        @endforeach
                                    </select> --}}
                                    {{ Form::select('organization_show', array('0' => 'Меридиан', '1' => 'Кванториум', '2' => 'ИТКуб', '10' => 'Нет'), null, ['class' => 'form-control']) }}
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="organization_show">Организация</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    {{-- <select name="published[]" id="published" class="form-control" multiple>
                                        @foreach($event->includes->get('published') as $option)
                                            <option value="{{ $option->id }}" {{ (collect(old('options'))->contains($option->id)) ? 'selected':'' }}>{{ $option->name }}</option>
                                        @endforeach
                                    </select> --}}
                                    {{ Form::select('published', array('0' => 'Нет', '1' => 'Да'), null, ['class' => 'form-control']) }}
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="published">{{ trans('event.publish') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    {{ Form::select('published_slider_status', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                            for="published_slider_status">{{ trans('event.slider') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    {!! Form::select('content_access', ['all' => 'Все', 'admin' => 'Администратор', 'director' => 'Директор', 'manager' => 'Управляющий ', 'redactor' => 'Редактор', 'teacher' => 'Преподаватель', 'student' => 'Студент', 'user' => 'Пользователь'], null, ['class' => 'form-control']) !!}
                                    <div class="input-group-append">
                                        <label class="input-group-text"
                                               for="published_slider_status">{{ trans('event.content_access') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{!! asset('js/tinymce.min.js') !!}"></script>
<script type="text/javascript">
tinymce.init({
    selector: 'textarea.tinymce-editor',
    height: 500,
    menubar: true,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    content_css: '//www.tiny.cloud/css/codepen.min.css'
});
</script>

@endsection
