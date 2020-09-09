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
    init_instance_callback : function(editor) {
      var freeTiny = document.querySelector('.mce-notification');
      freeTiny.style.display = 'none';
    //language_url : 'js/ru.js',
    autosave_interval: '20s',
    height: 500,
    menubar: true,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount',
        'autosave'
    ],
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    content_css: '//www.tiny.cloud/css/codepen.min.css'
});
</script>
@endsection