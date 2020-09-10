@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Events Add
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type="buttor"
                            class="btn btn-primary float-right">Назад</button></a>
                    @endcan
                </div>
                <div class="card-body">
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
                                        title="Ссылка на картинку вне сайта">Ссылка на картинку: [?]</strong><p>
                                        <strong data-toggle="tooltip" data-placement="right">Пример: https://sun4-10.userapi.com/oZh9C3MMINcce-71h7kZOoX4ZdFwysPVQlCHhA/HxOM3b1WNQ0.jpg</strong>
                                    <input type="text" name="link_images_1" class="form-control" placeholder="Ссылка на картинку вне сайта"></textarea>
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
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Автор:</strong>
                                    <input type="text" name="author" class="form-control" placeholder="Автор">
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