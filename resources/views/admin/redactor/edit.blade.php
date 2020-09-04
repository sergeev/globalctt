@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('events.events.update',$event->id) }}" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Заголовок:</strong>
                                <input type="text" name="title" value="{{ $event->title }}" class="form-control" placeholder="Заголовок">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Контент:</strong>
                                <textarea class="form-control" style="height:150px" name="content" placeholder="Контент">{{ $event->content }}</textarea>
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
                                <label class="input-group-text" for="published">Опубликовать</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>


            </form>
            <div class="card-header">
                @can('manage-events')
                <a href="{{ route('events.events.index') }}"><button type = "buttor" class= "btn btn-primary float-left">Назад</button>
                </a>
                @endcan
                @can('manage-events')
                <a href="{{ route('events.events.edit', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Edit</button></a>
                @endcan
            </div>
        </div>
    </div>
</div>
</div>
@endsection
