@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>События</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('events.create') }}"> Добавить новое событие</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Заголовок</th>
        <th>Опубликовано</th>
        <th>Опубликовано в slider</th>
        <th width="280px">Действие</th>
    </tr>
    @foreach ($events as $event)
    <tr>
        <td>{{ $event->id }}</td>
        <td>{{ $event->title }}</td>
        <td>{{ $event->published }}</td>
        <td>{{ $event->published_slider_status }}</td>
        <td>
            <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Просм.</a>
                <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Ред.</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $events->links() !!}

<p class="text-center text-primary"><small>+</small></p>
@endsection