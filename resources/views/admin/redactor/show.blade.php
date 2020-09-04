@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $event->title }}
                </div>
                <div class="card-body">
                    {{ $event->content }}
                </div>
                <div class="card-header">
                    @can('manage-events')
                    <a href="{{ route('events.events.index') }}"><button type = "buttor" class= "btn btn-primary float-left">Назад</button>
                    </a>
                    @endcan
                    @can('manage-events')
                    <a href="{{ route('events.events.edit', $event->id) }}"><button type = "buttor" class= "btn btn-primary float-right">Edit</button></a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
