@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('event.event_list') }}
                    @can('manage-events')
                    <a href="{{ route('events.events.create') }}"><button type="buttor"
                            class="btn btn-primary float-right">{{ trans('event.create') }}</button></a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <br>
            @foreach($events as $event)
            <div class="card">
                <div class="card-header">
                    Размещено в [
                        @if ($event->organization_show == '0')
                            Меридиан
                        @elseif($event->organization_show == '1')
                            Кванториум
                        @elseif($event->organization_show == '2')
                            ИТКуб
                        @elseif($event->organization_show == '11')
                        Везде
                        @else
                            Нет
                        @endif
                    ]
                    {{ $event->title }}
                    @can('manage-events')
                    <a href="{{ route('events.events.show', $event->id) }}"><button type="buttor"
                            class="btn btn-primary float-right">{{ trans('event.show') }}</button></a>
{{--                     <a href="{{ action('EventController@eventPublished', $event->id )}}">Published</a>--}}
                    @endcan
                </div>

            </div>
                <br>
            @endforeach

        </div>
    </div>
    {!! $events->render() !!}
</div>
@endsection
