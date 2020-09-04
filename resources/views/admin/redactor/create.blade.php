@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Events Add
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type = "buttor" class= "btn btn-primary float-right">Назад</button></a>
                    @endcan
                </div>
                <div class="card-body">
                   <form action="{{ route('events.events.store') }}" method="POST">
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
                            <label class="input-group-text" for="published">Опубликовать</label>
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
@endsection
