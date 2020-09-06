@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ trans('event.event_list') }}
                    @can('manage-events')
                    <a href="{{ route('events.events.create') }}"><button type = "buttor" class= "btn btn-primary float-right">{{ trans('event.create') }}</button></a>
                    @endcan
                </div>
            </div>
        </div>

        
        <div class="col-md-12">
            @foreach($events as $event)
            <div class="card">
                <div class="card-header">{{ $event->title }}
                </div>
                <div class="card-body">
                    {{ $event->content }}
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.show', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-right">{{ trans('event.show') }}</button></a>
                    @endcan
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {!! $events->render() !!}
</div>
@endsection
