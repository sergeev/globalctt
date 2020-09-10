@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Редактирование события {{ $event->title }}</div>
                <div class="card-body">
                    <form action="{{ route('events.events.update',$event->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.title') }}</strong>
                                    <input type="text" name="title" value="{{ $event->title }}" class="form-control"
                                        placeholder="Заголовок">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.content_main_page') }}</strong>
                                    <textarea class="form-control" style="height:150px" name="content_main_page"
                                        placeholder="Привью на главной ">{{ $event->content_main_page }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.content') }}</strong>
                                    <textarea class="form-control tinymce-editor" style="height:150px" name="content"
                                        placeholder="Контент">{{ $event->content }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.slug') }}</strong>
                                    <input type="text" name="slug" value="{{ $event->slug }}" class="form-control"
                                        placeholder="Slugs">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.author') }}</strong>
                                    <input type="text" name="author" value="{{ $event->author }}" class="form-control"
                                        placeholder="Автор">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="input-group mb-3">
                                    {{ Form::select('published', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
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

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">{{ trans('event.send') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.show', $event->id) }}"><button type="buttor"
                            class="btn btn-primary float-left">{{ trans('event.back') }}</button>
                    </a>
                    @endcan
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