@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Добавить новое событие </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.events.index') }}"> Назад</a>
        </div>
    </div>
</div>
@include('admin.errorsForm')
<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Заголовок:</strong>
                <input type="text" name="title" class="form-control" placeholder="Заголовок">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Контент:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Контент"></textarea>
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
@endsection
