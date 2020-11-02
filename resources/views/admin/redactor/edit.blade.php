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
                                    <strong>{{ trans('event.imagesLinkAdd') }}</strong><p>
                                    <strong data-toggle="tooltip" data-placement="right">Пример: https://sun4-10.userapi.com/oZh9C3MMINcce-71h7kZOoX4ZdFwysPVQlCHhA/HxOM3b1WNQ0.jpg</strong>
                                    <input type="text" name="link_images_1" value="{{ $event->link_images_1 }}" class="form-control"
                                        placeholder="Ссылка на картинку вне сайта">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.content_main_page') }}</strong>
                                    <textarea class="form-control" style="height:150px" name="content_main_page"
                                        placeholder="Привью на главной " maxlength="300">{{ $event->content_main_page }}</textarea>
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

                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('event.author') }}</strong>
                                    {{ Form::select('author', $users, [], array('class' => 'form-control')) }}
                                </div>
                            </div> --}}

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