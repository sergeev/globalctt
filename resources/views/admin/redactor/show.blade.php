@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $event->title }}
                    <p>{{ trans('event.created_at') }} {{ $event->created_at }} {{ trans('event.author') }}
                        {{ $event->author }}</p>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="{{ $event->link_images_1 }}" alt="" class="img-fluid">
                    {!! $event->content !!}
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type="buttor"
                            class="btn btn-primary float-left">{{ trans('event.back') }}</button>
                    </a>
                    @endcan
                    @can('manage-events')
                    <a href="{{ route('events.events.edit', $event->id) }}"><button type="buttor"
                            class="btn btn-primary float-right">{{ trans('event.edit') }}</button></a>

                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-warning" data-toggle="modal"
                        data-target="#eventModalCenterDelete">{{ trans('event.delete') }}</button>

                    <!-- Modal -->
                    <div class="modal fade" id="eventModalCenterDelete" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Подтвердите действие</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Вы действительно хотите удалить статью: {{ $event->title }} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Закрыть</button>

                                    <form action="{{ route('events.events.destroy', $event->id) }}" method="POST"
                                        class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-warning">Удалить</button>
                                    </form>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
