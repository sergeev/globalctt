@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Редактирование события {{ $event->title }}</div>
                <form action="{{ route('events.events.update',$event->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('event.title') }}</strong>
                                <input type="text" name="title" value="{{ $event->title }}" class="form-control" placeholder="Заголовок">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('event.content') }}</strong>
                                <textarea id="editor-body" class="form-control" style="height:150px" name="content" placeholder="Контент">{{ $event->content }}</textarea>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('event.slug') }}</strong>
                                <input type="text" name="slug" value="{{ $event->slug }}" class="form-control" placeholder="Slugs">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="input-group mb-3">
                                {{ Form::select('published', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                            <div class="input-group-append">
                                <label class="input-group-text" for="published">{{ trans('event.publish') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="input-group mb-3">
                            {{ Form::select('published_slider_status', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control']) }}
                        <div class="input-group-append">
                            <label class="input-group-text" for="published_slider_status">{{ trans('event.slider') }}</label>
                        </div>
                    </div>
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">{{ trans('event.send') }}</button>
                    </div>
                </div>
            </form>
            <div class="card-header">
                @can('manage-events')
                <a href="{{ route('events.events.show', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-left">{{ trans('event.back') }}</button>
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
